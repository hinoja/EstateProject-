<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResponseNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public array $data)
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $hour = date('H');

        $info = $hour > 17 ? "Bonsoir  " : (($hour > 12 && $hour <= 18) ? "Bon après-midi  " : "Bonjour  ");

        return (new MailMessage)
            ->greeting($info . $notifiable->name)
            ->subject(trans('New response notification'))
            ->line(trans('You have received a response for your message sent on ') . $this->data['created_at'] . trans(' with the subject: ') . $this->data['subject'])
            ->line(trans('The content of the response is: ') . $this->data['response'])
            ->action(trans('Go to website'), url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
