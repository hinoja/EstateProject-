<?php

namespace App\Livewire;

use App\Models\Estate;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ShowEstate extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.show-estate', [
            'estates' => Estate::query()->with('user')->orderBy('created_at', 'DESC')->get()->take(6),

        ]);
    }
}
