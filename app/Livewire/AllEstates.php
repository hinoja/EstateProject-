<?php

namespace App\Livewire;

use App\Models\Estate;
use Livewire\Component;

class AllEstates extends Component
{
    public function render()
    {
        return view('livewire.all-estates', [
            'estates' => Estate::query()->latest()->with('user')->paginate(4),
            'totalEstates' => Estate::count()
        ]);
    }
}
