<?php

namespace App\Livewire\Admin;

use App\Models\User;
use App\Models\Estate;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rules;
use App\Actions\UpdateUserStatus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageEstate extends Component
{
    use WithPagination, WithFileUploads, LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $location, $image, $area, $town, $price, $selectedEstate, $deleteId, $deleteEstate;

    //CRUD User
    public function closeModal()
    {
        $this->reset('location');
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('closeModal');
    }

    public function showEditForm(User $user)
    {
        $this->reset('location');
        $this->resetErrorBag();
        $this->dispatch('openEditModal');
        $this->resetValidation();
        $this->selectedEstate = $user;
        $this->location = $this->selectedEstate->location;
    }

    public function showCreateForm()
    {
        $this->reset('location');
        $this->resetErrorBag();
        $this->dispatch('openModal');
    }

    // public function updateUser()
    // {
    //     $newData = $this->validate([
    //         'location' => ['string', 'unique:tags,name,' . $this->selectedEstate->id . '', 'required', 'min:2'],
    //     ]);
    //     User::where('id', $this->selectedEstate->id)
    //         ->update([
    //             'location' => $newData['location'],
    //         ]);
    //     Toastr()->success(trans('The User has been updated'));
    //     $this->alert('success', trans('The User has been updated'));

    //     $this->closeModal();
    // }

    public function addEstate()
    {

        $this->resetErrorBag();
        $this->resetValidation();
        $newData = $this->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,ico,png|max:1024',
            'location' => ['required', 'string', 'max:255', 'unique:estates,location'],
            'town' => ['required', 'string', 'max:255'],
            'price' => ['nullable', 'numeric', 'min:0'],
            'area' => ['nullable', 'numeric', 'min:0'],
        ]);
        $estate = Estate::create([
            'image' => $newData['image'],
            'location' => $newData['location'],
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

        Toastr()->success("l'Utilisateur a été crée ");
        $this->alert('success', "l'Utilisateur a été crée");

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
        Toastr()->success("Le terrain a été supprimé");
        $this->alert('success', "Le terrain a été supprimé");
        $this->closeModal();
    }

    public function resetAttributes()
    {
        $this->reset(['location', 'deleteId', 'selectedEstate', 'deleteEstate']);
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
