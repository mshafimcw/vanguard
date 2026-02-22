<?php
// app/Http/Controllers/Admin/DashboardController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Donation Statistics
        $donationStats = [
            'totalAmount' => Order::where('order_status', 'completed')->sum('amount'),
            'successfulCount' => Order::where('order_status', 'completed')->count(),
            'pendingCount' => Order::where('order_status', 'pending')->count(),
            'failedCount' => Order::where('order_status', 'failed')->count(),
            'todayAmount' => Order::where('order_status', 'completed')
                                ->whereDate('created_at', today())
                                ->sum('amount'),
            'monthAmount' => Order::where('order_status', 'completed')
                                ->whereMonth('created_at', now()->month)
                                ->whereYear('created_at', now()->year)
                                ->sum('amount'),
            'totalDonations' => Order::count(),
        ];

        // User Statistics - Remove is_active reference
        $userStats = [
            'totalUsers' => User::count(),
            'newUsersThisMonth' => User::whereMonth('created_at', now()->month)
                                     ->whereYear('created_at', now()->year)
                                     ->count(),
            'activeUsers' => User::count(), // Since we don't have is_active, count all users
        ];

        // Recent donations for the table
        $recentDonations = Order::orderBy('created_at', 'desc')
                              ->paginate(10);

        // Monthly donation data for charts (last 6 months)
        $monthlyDonations = $this->getMonthlyDonationData();

        // Today's donations count
        $todayDonations = Order::whereDate('created_at', today())->count();

        return view('admin.dashboard', compact(
            'donationStats',
            'userStats',
            'recentDonations',
            'monthlyDonations',
            'todayDonations'
        ));
    }

    /**
     * Get monthly donation data for the last 6 months
     */
    private function getMonthlyDonationData()
    {
        $months = [];
        $amounts = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthName = $date->format('M Y');
            
            $total = Order::where('order_status', 'completed')
                         ->whereYear('created_at', $date->year)
                         ->whereMonth('created_at', $date->month)
                         ->sum('amount');
            
            $months[] = $monthName;
            $amounts[] = $total;
        }
        
        return [
            'months' => $months,
            'amounts' => $amounts,
        ];
    }

    /**
     * Get dashboard stats for AJAX requests
     */
    public function getStats(Request $request)
    {
        $type = $request->get('type', 'today');
        
        switch ($type) {
            case 'weekly':
                $startDate = Carbon::now()->startOfWeek();
                $endDate = Carbon::now()->endOfWeek();
                $amount = Order::where('order_status', 'completed')
                             ->whereBetween('created_at', [$startDate, $endDate])
                             ->sum('amount');
                $count = Order::where('order_status', 'completed')
                            ->whereBetween('created_at', [$startDate, $endDate])
                            ->count();
                break;
                
            case 'monthly':
                $startDate = Carbon::now()->startOfMonth();
                $endDate = Carbon::now()->endOfMonth();
                $amount = Order::where('order_status', 'completed')
                             ->whereBetween('created_at', [$startDate, $endDate])
                             ->sum('amount');
                $count = Order::where('order_status', 'completed')
                            ->whereBetween('created_at', [$startDate, $endDate])
                            ->count();
                break;
                
            case 'today':
            default:
                $amount = Order::where('order_status', 'completed')
                             ->whereDate('created_at', today())
                             ->sum('amount');
                $count = Order::where('order_status', 'completed')
                            ->whereDate('created_at', today())
                            ->count();
                break;
        }
        
        return response()->json([
            'amount' => $amount,
            'count' => $count,
            'formatted_amount' => '₹' . number_format($amount, 2)
        ]);
    }

    /**
     * Get donation status distribution
     */
    public function getDonationStatusDistribution()
    {
        $statuses = [
            'completed' => Order::where('order_status', 'completed')->count(),
            'pending' => Order::where('order_status', 'pending')->count(),
            'failed' => Order::where('order_status', 'failed')->count(),
        ];
        
        return response()->json($statuses);
    }

    /**
     * Get recent activity
     */
    public function getRecentActivity()
    {
        $recentDonations = Order::orderBy('created_at', 'desc')
                              ->limit(5)
                              ->get()
                              ->map(function ($donation) {
                                  return [
                                      'id' => $donation->id,
                                      'donor_name' => $donation->name ?? 'Anonymous',
                                      'amount' => '₹' . number_format($donation->amount, 2),
                                      'status' => $donation->order_status,
                                      'time' => $donation->created_at->diffForHumans(),
                                  ];
                              });
        
        $newUsers = User::orderBy('created_at', 'desc')
                       ->limit(3)
                       ->get()
                       ->map(function ($user) {
                           return [
                               'name' => $user->name,
                               'email' => $user->email,
                               'time' => $user->created_at->diffForHumans(),
                               'type' => 'user_registration'
                           ];
                       });
        
        $activity = $recentDonations->merge($newUsers)->sortByDesc(function ($item) {
            return isset($item['time']) ? $item['time'] : null;
        })->values()->take(8);
        
        return response()->json($activity);
    }
}