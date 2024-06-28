<?php

namespace App\Actions;

use App\Models\{Subscription, User};
use Illuminate\Support\Facades\Notification;
use App\Notifications\Front\Subscription\SubscriptionRenewalRequestNotification;

class RequestSubscriptionRenewal
{
    public Subscription $last_subscription;
    public User $user;

    public function __construct()
    {
        $this->user = User::query()->find(auth()->id());
        $this->last_subscription = $this->user->subscriptions->last();
    }

    public function send(int $subscription_id, int $amount = null)
    {
        User::query()->find(auth()->id())->subscriptions()->attach($subscription_id, [
            'amount' => $amount ?? $this->last_subscription->amount,
        ]);

        // EMAIL
        $message = trans('Your subscription renewal request as been successfully sent. You will be contacted shortly via WhatsApp by administrator for further details in order to validate your subscription.');
        $data = [
            'message' => $message,
            'type' => $this->last_subscription->name,
            'slug' => $this->user->slug,
            'from' => $this->user->name,
        ];

        Notification::send([User::query()->firstWhere('role_id', 1), $this->user], new SubscriptionRenewalRequestNotification($data));

        alert('', $message . ' ' . trans('An email has been sent to you.'), 'success')->autoclose(25000);
    }
}
