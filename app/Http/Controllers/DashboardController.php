<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $nbre_messages = Contact::count();
        $nbre_users = User::count();

        return view('dashboard.index', [
                                                    'messages' => $nbre_messages,
                                                    'users' => $nbre_users,
                                                    ]);
    }
}
