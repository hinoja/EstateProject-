<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Estate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.index', [
                                                    'messages' =>  Contact::count(),
                                                    'users' => User::count(),
                                                    'estates' => Estate::count(),
                                                    ]);
    }
}
