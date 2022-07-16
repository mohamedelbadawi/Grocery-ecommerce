<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationFullPage extends Component
{

    public function markAllAsRead()
    {
        $notifications = auth('admin')->user()->notifications;
        foreach ($notifications as $notification) {
            $notification->markAsRead();
        }
    }
    public function showNotification($notification_id, $order_id)
    {
        $notification = auth('admin')->user()->notifications->where('id', $notification_id);
        $notification->markAsRead();
        return redirect()->route('admin.order.edit', $order_id);
    }

    public function render()
    {
        $notifications = auth('admin')->user()->notifications;
        // dd($notifications);

        return view('livewire.notification-full-page', compact('notifications'));
    }
}
