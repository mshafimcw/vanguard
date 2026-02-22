<?php
// app/Http/Controllers/Admin/DonationReportController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DonationNotification;
use App\Mail\DonorThankYou;

class DonationReportController extends Controller
{
    public function index()
    {
        $donations = Order::orderBy('created_at', 'desc')->paginate(20);
        
        $stats = [
            'totalAmount' => Order::where('order_status', 'completed')->sum('amount'),
            'successfulCount' => Order::where('order_status', 'completed')->count(),
            'pendingCount' => Order::where('order_status', 'pending')->count(),
            'failedCount' => Order::where('order_status', 'failed')->count(),
            'todayAmount' => Order::where('order_status', 'completed')
                                ->whereDate('created_at', today())
                                ->sum('amount'),
            'monthAmount' => Order::where('order_status', 'completed')
                                ->whereMonth('created_at', now()->month)
                                ->sum('amount'),
        ];

        return view('admin.donations-report', compact('donations', 'stats'));
    }

    public function show($id)
    {
        $donation = Order::findOrFail($id);
        $transaction = Transaction::where('transaction_code', 'like', '%' . $id . '%')->first();
        
        return view('admin.donation-details', compact('donation', 'transaction'));
    }

    public function export(Request $request)
    {
        $donations = Order::orderBy('created_at', 'desc')->get();
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="donations_' . date('Y-m-d') . '.csv"',
        ];

        $callback = function() use ($donations) {
            $file = fopen('php://output', 'w');
            
            // Add CSV headers
            fputcsv($file, ['Order ID', 'Donor Name', 'Email', 'Amount', 'Status', 'Phone', 'Address', 'Date']);
            
            // Add data
            foreach ($donations as $donation) {
                fputcsv($file, [
                    $donation->id,
                    $donation->name,
                    $donation->email_id,
                    $donation->amount,
                    $donation->order_status,
                    $donation->phonenumber,
                    $donation->address,
                    $donation->created_at->format('Y-m-d H:i:s')
                ]);
            }
            
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}