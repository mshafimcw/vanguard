@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(135deg, #164A25, #00AA55);">
                    <h3 class="card-title text-white">Donation Reports</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.donations.export') }}" class="btn btn-light btn-sm">
                            <i class="fa fa-download"></i> Export CSV
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Statistics Cards -->
                    <div class="row mb-4">
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Total Donations</h6>
                                            <h3>₹{{ number_format($stats['totalAmount'], 2) }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-rupee-sign fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-white bg-success">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Successful</h6>
                                            <h3>{{ $stats['successfulCount'] }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-check-circle fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-white bg-warning">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Pending</h6>
                                            <h3>{{ $stats['pendingCount'] }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-clock fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Failed</h6>
                                            <h3>{{ $stats['failedCount'] }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-times-circle fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-white bg-info">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">Today</h6>
                                            <h3>₹{{ number_format($stats['todayAmount'], 2) }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-calendar-day fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <div class="card text-white bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h6 class="card-title">This Month</h6>
                                            <h3>₹{{ number_format($stats['monthAmount'], 2) }}</h3>
                                        </div>
                                        <div class="align-self-center">
                                            <i class="fa fa-calendar-alt fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donations Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Order ID</th>
                                    <th>Donor Name</th>
                                    <th>Email</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donations as $donation)
                                <tr>
                                    <td><code>{{ $donation->id }}</code></td>
                                    <td>{{ $donation->name }}</td>
                                    <td>{{ $donation->email_id }}</td>
                                    <td class="font-weight-bold text-success">₹{{ number_format($donation->amount, 2) }}</td>
                                    <td>
                                        <span class="badge badge-{{ 
                                            $donation->order_status == 'completed' ? 'success' : 
                                            ($donation->order_status == 'pending' ? 'warning' : 
                                            ($donation->order_status == 'created' ? 'info' : 'danger')) 
                                        }}">
                                            {{ ucfirst($donation->order_status) }}
                                        </span>
                                    </td>
                                    <td>{{ $donation->phonenumber }}</td>
                                    <td>{{ $donation->created_at->format('M d, Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('admin.donations.show', $donation->id) }}" 
                                           class="btn btn-sm btn-outline-primary" 
                                           title="View Details">
                                            View
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $donations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
.card {
    border: none;
    box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
}
.card-header {
    border-bottom: 1px solid #e3e6f0;
}
.badge {
    font-size: 0.8em;
    padding: 0.4em 0.6em;
}
.table th {
    border-top: none;
    background-color: #f8f9fc;
    color: #164A25;
    font-weight: 600;
}
</style>
@endsection