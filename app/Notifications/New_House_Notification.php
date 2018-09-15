<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class New_House_Notification extends Notification
{
    use Queueable;
    protected $house ;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($house)
    {
        $this->house=$house ;
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable)
    {
        return [
            'house'=> $this->house,
            //
        ];
    }
}
