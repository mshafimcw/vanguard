{{-- resources/views/admin/contacts/index.blade.php --}}

@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1>Contact Submissions</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Search and Filter Form -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Filter Submissions</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contacts.index') }}" method="GET" class="row g-3">
                <div class="col-md-3">
                    <label for="name" class="form-label">Search by Name</label>
                    <input type="text" class="form-control" id="name" name="name" 
                           value="{{ request('name') }}" placeholder="Enter name...">
                </div>
                <div class="col-md-3">
                    <label for="from_date" class="form-label">From Date</label>
                    <input type="date" class="form-control" id="from_date" name="from_date" 
                           value="{{ request('from_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="to_date" class="form-label">To Date</label>
                    <input type="date" class="form-control" id="to_date" name="to_date" 
                           value="{{ request('to_date') }}">
                </div>
                <div class="col-md-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="">All Status</option>
                        <option value="unread" {{ request('status') == 'unread' ? 'selected' : '' }}>Unread</option>
                        <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>Read</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-search"></i> Search
                    </button>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">
                        <i class="fas fa-refresh"></i> Reset
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Results Summary -->
    @if(request()->hasAny(['name', 'from_date', 'to_date', 'status']))
    <div class="alert alert-info mb-4">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <strong>Filter Active:</strong>
                @if(request('name')) <span class="badge bg-primary">Name: "{{ request('name') }}"</span> @endif
                @if(request('from_date')) <span class="badge bg-primary">From: {{ request('from_date') }}</span> @endif
                @if(request('to_date')) <span class="badge bg-primary">To: {{ request('to_date') }}</span> @endif
                @if(request('status')) <span class="badge bg-primary">Status: {{ ucfirst(request('status')) }}</span> @endif
            </div>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-sm btn-outline-secondary">Clear all filters</a>
        </div>
    </div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Contact Submissions 
                <small class="text-muted">({{ $submissions->total() }} total)</small>
            </h5>
            
           
        </div>
        
        <div class="card-body">
            @if($submissions->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th width="30">
                                    <input type="checkbox" id="selectAll">
                                </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($submissions as $submission)
                                <tr class="{{ $submission->is_read ? '' : 'bg-warning bg-opacity-10' }}">
                                    <td>
                                        <input type="checkbox" name="ids[]" value="{{ $submission->id }}" class="row-checkbox">
                                    </td>
                                    <td>
                                        <div class="fw-bold">{{ $submission->name }}</div>
                                        @if($submission->phone)
                                            <small class="text-muted">{{ $submission->phone }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="mailto:{{ $submission->email }}" class="text-decoration-none">
                                            {{ $submission->email }}
                                        </a>
                                    </td>
                                    <td>
                                        <span class="d-inline-block text-truncate" style="max-width: 200px;" title="{{ $submission->subject }}">
                                            {{ $submission->subject }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($submission->is_read)
                                            <span class="badge bg-success">Read</span>
                                        @else
                                            <span class="badge bg-warning text-dark">Unread</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="small">
                                            <div>{{ $submission->created_at->format('M j, Y') }}</div>
                                            <div class="text-muted">{{ $submission->created_at->format('g:i A') }}</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.contacts.show', $submission) }}" class="btn btn-sm btn-primary" title="View Details">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            
                                            @if($submission->is_read)
                                                <form action="{{ route('admin.contacts.mark-unread', $submission) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-warning" title="Mark as Unread">
                                                        <i class="fas fa-envelope"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('admin.contacts.mark-read', $submission) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-success" title="Mark as Read">
                                                        <i class="fas fa-envelope-open"></i>
                                                    </button>
                                                </form>
                                            @endif
                                            
                                            <form action="{{ route('admin.contacts.destroy', $submission) }}" method="POST" class="d-inline" 
                                                  onsubmit="return confirm('Are you sure you want to delete this submission?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-3">
                    <div class="text-muted">
                        Showing {{ $submissions->firstItem() }} to {{ $submissions->lastItem() }} of {{ $submissions->total() }} entries
                    </div>
                    
                    <!-- Laravel Pagination -->
                    {{ $submissions->appends(request()->query())->links() }}
                    
                    <div class="d-flex align-items-center">
                        <label for="perPage" class="me-2 mb-0 small">Show:</label>
                        <select class="form-select form-select-sm" id="perPage" onchange="changePerPage(this.value)" style="width: auto;">
                            <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                            <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                            <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                            <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                        </select>
                    </div>
                </div>

            @else
                <div class="text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-inbox fa-3x text-muted"></i>
                    </div>
                    <h4 class="text-muted">No contact submissions found</h4>
                    @if(request()->hasAny(['name', 'from_date', 'to_date', 'status']))
                        <p class="text-muted mb-3">Try adjusting your search criteria</p>
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary">
                            <i class="fas fa-list"></i> Show All Submissions
                        </a>
                    @else
                        <p class="text-muted">No contact submissions have been received yet.</p>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Custom Badge Styles */
.badge {
    display: inline-block;
    padding: 0.35em 0.65em;
    font-size: 0.75em;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.375rem;
}

.badge-success {
    color: #fff;
    background-color: #28a745;
}

.badge-warning {
    color: #212529;
    background-color: #ffc107;
}

.badge-danger {
    color: #fff;
    background-color: #dc3545;
}

.badge-primary {
    color: #fff;
    background-color: #007bff;
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d;
}

.badge-info {
    color: #fff;
    background-color: #17a2b8;
}

/* Table row hover effect */
.table-hover tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.075);
}

/* Checkbox alignment */
input[type="checkbox"] {
    cursor: pointer;
}

/* Button group spacing */
.btn-group .btn {
    margin-right: 2px;
}

.btn-group .btn:last-child {
    margin-right: 0;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .card-header {
        flex-direction: column;
        align-items: start !important;
        gap: 15px;
    }
    
    .table-responsive {
        font-size: 0.875rem;
    }
    
    .btn-group {
        display: flex;
        flex-wrap: wrap;
        gap: 2px;
    }
    
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .d-flex.justify-content-between {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}

/* Custom pagination styling */
.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
}

.pagination .page-link {
    color: #007bff;
    border: 1px solid #dee2e6;
}

.pagination .page-link:hover {
    color: #0056b3;
    background-color: #e9ecef;
    border-color: #dee2e6;
}

/* Bulk action form styling */
#bulkActionForm .input-group {
    width: auto;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Select All checkbox functionality
    const selectAll = document.getElementById('selectAll');
    if (selectAll) {
        selectAll.addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.row-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    }

    // Bulk action form submission
    const bulkActionForm = document.getElementById('bulkActionForm');
    if (bulkActionForm) {
        bulkActionForm.addEventListener('submit', function(e) {
            const selectedIds = document.querySelectorAll('.row-checkbox:checked');
            const action = document.getElementById('bulkAction').value;
            
            if (selectedIds.length === 0) {
                e.preventDefault();
                alert('Please select at least one item.');
                return;
            }
            
            if (!action) {
                e.preventDefault();
                alert('Please select an action.');
                return;
            }
            
            if (action === 'delete') {
                if (!confirm(`Are you sure you want to delete ${selectedIds.length} selected item(s)?`)) {
                    e.preventDefault();
                    return;
                }
            }
        });
    }

    // Date validation
    const fromDate = document.getElementById('from_date');
    const toDate = document.getElementById('to_date');
    
    if (fromDate && toDate) {
        fromDate.addEventListener('change', function() {
            if (this.value && toDate.value && this.value > toDate.value) {
                toDate.value = this.value;
            }
        });

        toDate.addEventListener('change', function() {
            if (this.value && fromDate.value && this.value < fromDate.value) {
                alert('To date cannot be before from date.');
                this.value = fromDate.value;
            }
        });
    }
});

// Items per page changer
function changePerPage(perPage) {
    const url = new URL(window.location.href);
    url.searchParams.set('per_page', perPage);
    url.searchParams.delete('page');
    window.location.href = url.toString();
}
</script>
@endpush