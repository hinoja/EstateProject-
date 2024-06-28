<?php

namespace App\Actions;

use App\Models\User;

class UpdateUserStatus
{
    public function handle(User $user)
    {
        if ($user->is_active) {
            $user->is_active = false;
            $user->disabled_by = auth()->id();
            $user->disabled_at = now();
        } else {
            $user->is_active = true;
            $user->disabled_by = null;
            $user->disabled_at = null;
        }

        $user->save();
    }
}
