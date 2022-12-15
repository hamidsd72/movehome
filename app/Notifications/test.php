<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Withdrawal extends Notification
{
    use Queueable;

    // public $counter;
    // public function __construct($counter)
    // {
    //     $this->counter = $counter; 
    // }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    { 
        return (new MailMessage)
                    ->subject('test')
                    // ->line($this->counter.' ada was deducted from your account')
                    ->line('body msg')
                    ->action('Withdrawal', url('/'));
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
