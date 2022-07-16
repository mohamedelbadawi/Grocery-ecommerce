<div>
    <div class="card-header py-3 d-flex justify-content-between">
        <h4 class="m-0 font-weight-bold text-primary">Notifications</h6>
            <button class="btn  btn-outline-primary mr-0" wire:click="markAllAsRead">Mark all as read</button>
    </div>
    @foreach ($notifications as $notification)
        <div class="card">
            <div class="card-body text-weight-bold">
                <button class="btn"
                    wire:click="showNotification('{{ $notification->id }}','{{ $notification->data['order_id'] }}')">
                    {{ $notification->data['user_name'] }} made an order to
                    {{ $notification->data['address'] }}
                    with total:
                    {{ $notification->data['total'] }} EGP</span>
                </button>
            </div>
        </div>
    @endforeach

</div>
