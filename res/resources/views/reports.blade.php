@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row fullwidth">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar">
            <div class="d-flex flex-column flex-shrink-0 p-3">
                <h4 class="text-center mb-4">Welcome</h4>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ route('profile') }}" class="nav-link text-white">
                            <i class="bi bi-person me-2"></i>
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.reports') }}" class="nav-link active">
                            <i class="bi bi-graph-up me-2"></i>
                            Donation Reports
                        </a>
                    </li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();" class="nav-link text-white">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
            <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 ms-sm-auto px-4 py-4">
            <!-- Page Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="h3 mb-1">Donation Reports</h2>
                    <p class="text-muted mb-0">View and filter your donation history</p>
                </div>
                <div class="export-section">
                    <button class="btn btn-outline-primary">
                        <i class="bi bi-download me-1"></i> Export
                    </button>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">Filter Reports</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.reports') }}" method="GET" class="row g-3">
                        <div class="col-md-3">
                            <label for="start_date" class="form-label">From Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" 
                                   value="{{ request('start_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="end_date" class="form-label">To Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" 
                                   value="{{ request('end_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="">All Status</option>
                                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="created" {{ request('status') == 'created' ? 'selected' : '' }}>Created</option>
                                <option value="failed" {{ request('status') == 'failed' ? 'selected' : '' }}>Failed</option>
                            </select>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary me-2 w-100">Apply Filter</button>
                            <a href="{{ route('profile.reports') }}" class="btn btn-outline-secondary">Reset</a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row mb-4">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Amount</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">₹{{ number_format($totalAmount, 2) }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-cash-coin fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Donations</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalDonations }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-check-circle fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Filtered Results</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $filteredCount }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-funnel fa-2x text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Successful</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $successfulCount }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-award fa-2x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donations Table -->
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Donation History</h5>
                    <span class="badge bg-primary">{{ $donations->total() }} records</span>
                </div>
                <div class="card-body">
                    @if($donations->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Order ID</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Payment Method</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donations as $donation)
                                <tr>
                                    <td>{{ $donation->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <code class="text-muted">{{ Str::limit($donation->id, 10) }}</code>
                                    </td>
                                    <td class="fw-bold text-success">₹{{ number_format($donation->amount, 2) }}</td>
                                    <td>
                                        <span class="badge 
                                            @if($donation->order_status == 'completed') bg-success
                                            @elseif($donation->order_status == 'created') bg-info
                                            @else bg-danger
                                            @endif">
                                            {{ ucfirst($donation->order_status) }}
                                        </span>
                                    </td>
                                    <td>Razorpay</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#donationModal{{ $donation->id }}">
                                            <i class="bi bi-eye me-1"></i> View
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div class="text-muted">
                            Showing {{ $donations->firstItem() }} to {{ $donations->lastItem() }} of {{ $donations->total() }} results
                        </div>
                        <nav>
                            {{ $donations->appends(request()->query())->links() }}
                        </nav>
                    </div>
                    @else
                    <div class="text-center py-5">
                        <i class="bi bi-inbox display-1 text-muted"></i>
                        <h5 class="text-muted mt-3">No donations found</h5>
                        <p class="text-muted">No donations match your current filter criteria.</p>
                        <a href="{{ route('donate.form') }}" class="btn btn-primary">
                            <i class="bi bi-heart me-1"></i> Make a Donation
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Donation Detail Modals - MOVE OUTSIDE MAIN CONTENT -->
@foreach($donations as $donation)
<div class="modal fade" id="donationModal{{ $donation->id }}" tabindex="-1" aria-labelledby="donationModalLabel{{ $donation->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="donationModalLabel{{ $donation->id }}">Donation Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Order ID:</strong></td>
                                <td><code>{{ $donation->id }}</code></td>
                            </tr>
                            <tr>
                                <td><strong>Amount:</strong></td>
                                <td class="fw-bold text-success">₹{{ number_format($donation->amount, 2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Status:</strong></td>
                                <td>
                                    <span class="badge 
                                        @if($donation->order_status == 'completed') bg-success
                                        @elseif($donation->order_status == 'created') bg-info
                                        @else bg-danger
                                        @endif">
                                        {{ ucfirst($donation->order_status) }}
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Date:</strong></td>
                                <td>{{ $donation->created_at->format('F j, Y g:i A') }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email:</strong></td>
                                <td>{{ $donation->email_id }}</td>
                            </tr>
                            <tr>
                                <td><strong>Phone:</strong></td>
                                <td>{{ $donation->phonenumber }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                @if($donation->address)
                <div class="row mt-3">
                    <div class="col-12">
                        <strong>Address:</strong>
                        <p class="mt-1">{{ $donation->address }}</p>
                    </div>
                </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('styles')
<style>
:root {
    --enved-primary: #164A25;
    --enved-secondary: #00AA55;
}

/* Fix Modal Z-index */
.modal {
    z-index: 10999  !important;
}

.modal-backdrop {
    z-index: 1 !important;
}

/* Sidebar Styles */
.sidebar {
    background: linear-gradient(180deg, var(--enved-primary) 0%, #0d3518 100%);
    min-height: 100vh;
    padding: 0;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    overflow-y: auto;
}

.sidebar .nav-link {
    color: #e8f5e8;
    padding: 12px 20px;
    border-radius: 0;
    border-left: 3px solid transparent;
    transition: all 0.3s ease;
}
.fullwidth
{

    width: 80% !important;
}

.sidebar .nav-link:hover {
    background: rgba(0, 170, 85, 0.1);
    color: white;
    border-left-color: var(--enved-secondary);
}

.sidebar .nav-link.active {
    background: linear-gradient(90deg, var(--enved-secondary) 0%, transparent 100%);
    color: white;
    border-left-color: white;
}

/* Main Content Margin */
.col-md-9.col-lg-10 {
    margin-left: 25%;
}

/* Card Border Colors */
.border-left-primary {
    border-left: 4px solid var(--enved-primary) !important;
}

.border-left-success {
    border-left: 4px solid var(--enved-secondary) !important;
}

.border-left-info {
    border-left: 4px solid #17a2b8 !important;
}

.border-left-warning {
    border-left: 4px solid #ffc107 !important;
}

/* Text Colors */
.text-primary {
    color: var(--enved-primary) !important;
}

.text-success {
    color: var(--enved-secondary) !important;
}

/* Badge Colors */
.bg-primary {
    background-color: var(--enved-primary) !important;
}

.bg-success {
    background-color: var(--enved-secondary) !important;
}

/* Button Styles */
.btn-primary {
    background-color: var(--enved-primary);
    border-color: var(--enved-primary);
}

.btn-primary:hover {
    background-color: var(--enved-dark);
    border-color: var(--enved-dark);
}

/* Table Styles */
.table th {
    border-top: none;
    font-weight: 600;
    background-color: #f8f9fa;
}

/* Modal Header */
.modal-header.bg-primary {
    background: linear-gradient(135deg, var(--enved-primary) 0%, var(--enved-secondary) 100%) !important;
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        position: relative;
        min-height: auto;
    }
    
    .col-md-9.col-lg-10 {
        margin-left: 0 !important;
        width: 100%;
    }
}

/* Ensure modal is properly positioned */
.modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
}

.modal-content {
    margin: auto;
}
.sidebar
{
    padding-top: 100px;
}
</style>
@endsection

@section('scripts')
<script>
// Ensure modals work properly
document.addEventListener('DOMContentLoaded', function() {
    // Fix for modal backdrop
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        modal.addEventListener('show.bs.modal', function() {
            document.body.classList.add('modal-open');
        });
        
        modal.addEventListener('hidden.bs.modal', function() {
            document.body.classList.remove('modal-open');
        });
    });
});
</script>
@endsection