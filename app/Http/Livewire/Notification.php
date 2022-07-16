<?php

namespace App\Http\Livewire;

use App\Notifications\OrderNotification;
use Livewire\Component;

class Notification extends Component
{

    public function showNotification($notification_id, $order_id)
    {
        $notification = auth('admin')->user()->notifications->where('id', $notification_id);
        $notification->markAsRead();
        return redirect()->route('admin.order.edit', $order_id);
    }
    public function render()
    {
        $notifications = auth('admin')->user()->unreadNotifications;
        return view('livewire.notification', compact('notifications'));
    }
}
