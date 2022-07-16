<div>
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">{{ $notifications->count() }}</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Notifications Center
            </h6>
            @forelse ($notifications->slice(0, 5) as $notification)
                <button class="dropdown-item d-flex align-items-center"
                    wire:click="showNotification('{{ $notification->id }}','{{ $notification->data['order_id'] }}')">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">
                            {{ $notification->created_at->diffForHumans() }}</div>
                        <span class="font-weight-bold">
                            {{ $notification->data['user_name'] }} made an order to
                            {{ $notification->data['address'] }}
                            with total:
                            {{ $notification->data['total'] }} EGP</span>
                    </div>
                </button>
            @empty
                <p class="text-center m-2">No Unread notifications</p>
            @endforelse


            <a class="dropdown-item text-center small text-gray-500" href="{{ route('admin.notification') }}">Show All
                Alerts</a>
        </div>
    </li>
</div>
