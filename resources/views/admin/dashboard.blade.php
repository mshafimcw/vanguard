@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>₹{{ number_format($donationStats['totalAmount'], 2) }}</h3>
                        <p>Total Donations</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-donate"></i>
                    </div>
                    <a href="{{ route('admin.donations.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $userStats['totalUsers'] }}</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>₹{{ number_format($donationStats['todayAmount'], 2) }}</h3>
                        <p>Today's Collection</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-calendar-day"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>₹{{ number_format($donationStats['monthAmount'], 2) }}</h3>
                        <p>Monthly Collection</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Donation Status Row -->
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white;">
                    <div class="inner">
                        <h3>{{ $donationStats['successfulCount'] }}</h3>
                        <p>Successful Donations</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $donationStats['pendingCount'] }}</h3>
                        <p>Pending Donations</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>{{ $donationStats['failedCount'] }}</h3>
                        <p>Failed Donations</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Activity Row -->
        <div class="row">
            <!-- Monthly Chart -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Monthly Donations Trend</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="monthlyDonationsChart" height="250" style="height: 250px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Recent Activity</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2" id="recentActivity">
                            <li class="item">
                                <div class="product-info">
                                    <span class="product-title">Loading activities...</span>
                                    <span class="product-description">Just now</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Donations Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recent Donations</h3>
                        <div class="card-tools">
                            <span class="badge badge-primary">{{ $donationStats['totalDonations'] }} total donations</span>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        @if($recentDonations->count() > 0)
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Donor Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentDonations as $donation)
                                <tr>
                                    <td><code>#{{ Str::limit($donation->id, 8) }}</code></td>
                                    <td>{{ $donation->name ?? 'Anonymous' }}</td>
                                    <td>{{ $donation->email_id }}</td>
                                    <td class="text-success font-weight-bold">₹{{ number_format($donation->amount, 2) }}</td>
                                    <td>
                                        <span class="badge 
                                            @if($donation->order_status == 'completed') badge-success
                                            @elseif($donation->order_status == 'pending') badge-warning
                                            @else badge-danger
                                            @endif">
                                            {{ ucfirst($donation->order_status) }}
                                        </span>
                                    </td>
                                    <td>{{ $donation->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-primary" 
                                                    data-toggle="modal" 
                                                    data-target="#donationModal{{ $donation->id }}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <a href="{{ route('admin.donations.show', $donation->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="text-center py-5">
                            <i class="fas fa-inbox fa-3x text-muted"></i>
                            <h5 class="text-muted mt-3">No donations found</h5>
                            <p class="text-muted">No donations have been made yet.</p>
                        </div>
                        @endif
                    </div>
                    <!-- /.card-body -->
                    @if($recentDonations->count() > 0)
                    <div class="card-footer clearfix">
                        <div class="float-left">
                            <span class="text-muted">
                                Showing {{ $recentDonations->firstItem() }} to {{ $recentDonations->lastItem() }} of {{ $recentDonations->total() }} results
                            </span>
                        </div>
                        <div class="float-right">
                            {{ $recentDonations->links() }}
                        </div>
                    </div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Donation Detail Modals -->
@foreach($recentDonations as $donation)
<div class="modal fade" id="donationModal{{ $donation->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Donation Details - #{{ $donation->id }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Order ID:</strong></td>
                                <td><code>#{{ $donation->id }}</code></td>
                            </tr>
                            <tr>
                                <td><strong>Donor Name:</strong></td>
                                <td>{{ $donation->name ?? 'Anonymous' }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $donation->email_id }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Amount:</strong></td>
                                <td class="text-success font-weight-bold">₹{{ number_format($donation->amount, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Status:</strong></td>
                                <td>
                                    <span class="badge 
                                        @if($donation->order_status == 'completed') badge-success
                                        @elseif($donation->order_status == 'pending') badge-warning
                                        @else badge-danger
                                        @endif">
                                        {{ ucfirst($donation->order_status) }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Date:</strong></td>
                                <td>{{ $donation->created_at->format('F j, Y g:i A') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @if($donation->address)
                <div class="row mt-3">
                    <div class="col-12">
                        <strong>Address:</strong>
                        <p class="mt-1 mb-0">{{ $donation->address }}</p>
                    </div>
                </div>
                @endif
            </div>
            <div class="modal-footer">
                <a href="{{ route('admin.donations.show', $donation->id) }}" class="btn btn-primary">
                    <i class="fas fa-info-circle mr-1"></i> Full Details
                </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Monthly Donations Chart
    const monthlyCtx = document.getElementById('monthlyDonationsChart').getContext('2d');
    const monthlyChart = new Chart(monthlyCtx, {
        type: 'line',
        data: {
            labels: @json($monthlyDonations['months']),
            datasets: [{
                label: 'Monthly Donations (₹)',
                data: @json($monthlyDonations['amounts']),
                borderColor: '#007bff',
                backgroundColor: 'rgba(0, 123, 255, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0,0,0,0.1)'
                    },
                    ticks: {
                        callback: function(value) {
                            return '₹' + value.toLocaleString();
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Load Recent Activity
    loadRecentActivity();

    function loadRecentActivity() {
        fetch("{{ route('admin.dashboard.activity') }}")
            .then(response => response.json())
            .then(data => {
                const activityContainer = document.getElementById('recentActivity');
                activityContainer.innerHTML = '';
                
                data.forEach(activity => {
                    const activityItem = document.createElement('li');
                    activityItem.className = 'item';
                    
                    let activityText = '';
                    let activityDesc = '';
                    
                    if (activity.type === 'user_registration') {
                        activityText = `<strong>${activity.name}</strong> registered`;
                        activityDesc = activity.time;
                    } else {
                        activityText = `<strong>${activity.donor_name}</strong> donated ${activity.amount}`;
                        activityDesc = `${activity.time} - ${activity.status}`;
                    }
                    
                    activityItem.innerHTML = `
                        <div class="product-info">
                            <span class="product-title">${activityText}</span>
                            <span class="product-description">${activityDesc}</span>
                        </div>
                    `;
                    
                    activityContainer.appendChild(activityItem);
                });
            })
            .catch(error => {
                console.error('Error loading activity:', error);
            });
    }

    // Export functionality
    const exportBtn = document.getElementById('exportBtn');
    if (exportBtn) {
        exportBtn.addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = "{{ route('admin.donations.export') }}";
        });
    }
});
</script>
@endsection