<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Models\Estate;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Http\RedirectResponse;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageEstate extends Component
{
    use WithPagination, WithFileUploads, LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $location, $description, $image, $area, $town, $price, $selectedEstate, $deleteId, $deleteEstate;

    //CRUD User
    public function closeModal()
    {
        $this->reset('location');
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('closeModal');
    }

    public function showEditForm(Estate $estate)
    {
        $this->reset('location');
        $this->resetErrorBag();
        $this->dispatch('openModal');
        $this->resetValidation();
        $this->selectedEstate = $estate;
        // $this->location = $this->selectedEstate->location;
    }

    public function showCreateForm()
    {
        $this->reset('location');
        $this->resetErrorBag();
        $this->dispatch('openModal');
    }


    public function addEstate()
    {

        $this->resetErrorBag();
        $this->resetValidation();
        $newData = $this->validate([
            'image' => 'required|image|mimes:jpeg,jpg,ico,png|max:6144',
            'location' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:400',],
            'town' => ['required', 'string', 'max:255'],
            'price' => ['nullable', 'numeric', 'min:0'],
            'area' => ['nullable', 'numeric', 'min:0'],
        ]);
        $estate = Estate::create([
            'image' => $newData['image'],
            'location' => $newData['location'],
            'description' => $newData['description'],
            'town' => $newData['town'],
            'price' => $newData['price'],
            'area' => $newData['area'],
            'user_id' => auth()->user()->id,
        ]);
        $filename_chemin = 'estates/' . $estate->id . '.' . $this->image->getClientOriginalExtension();
        // $filename = Str::slug( $newData['location']). '.' . $this->image->extension();
        $filename = $estate->id . '.' . $this->image->getClientOriginalExtension();
        $estate->image = $filename_chemin;
        $this->image->storeAs('public/estates', $filename);
        $estate->save();

        Toastr()->success("Un Site a été ajouté avec  ");
        $this->alert('success', "Un Site a été ajouté avec succès");
        $this->resetAttributes();
        $this->closeModal();
    }

    public function deleteEstate($id)
    {
        $this->deleteId = $id;
        $this->location = (Estate::find($this->deleteId))->location;
    }

    public function showDeleteForm(Estate $estate)
    {
        $this->dispatch('openDeleteModal');
        $this->deleteId = $estate->id;
        $this->location = $estate->location;
    }

    public function destroyEstate()
    {
        $this->deleteEstate = Estate::find($this->deleteId);
        $this->deleteEstate->delete();
        Toastr()->success("Le Site a été supprimé");
        $this->alert('success', "Le Site a été supprimé");
        $this->closeModal();
    }

    public function resetAttributes()
    {
        $this->reset(['location', 'description', 'price', 'area', 'town', 'deleteId', 'selectedEstate', 'deleteEstate']);
    }

    /**
     * Enable or disable user account
     */
    public function updateStatus(User $user): RedirectResponse
    {
        if ($user->is_active) {
            $user->is_active = false;
        } else {
            $user->is_active = true;
        }

        $user->save();
        $message = match (intval($user->is_active)) {
            1 => __('Account has been successfully unblocked.'),
            0 => __('Account has been successfully blocked.'),
        };

        // toast($message, 'success');
        $this->alert('success', $message);

        return back();
    }
    public function render()
    {
        return view('livewire.admin.manage-estate', [
            'estates' => Estate::query()->latest()->with('user')->paginate(4),
            'totalEstates' => Estate::count()
        ]);
    }
}
