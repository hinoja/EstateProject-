<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rules;
use App\Actions\UpdateUserStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageUsers extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $name, $email, $password, $selectedUser, $deleteId, $deleteUser;

    //CRUD User
    public function closeModal()
    {
        $this->reset('name');
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('closeModal');
    }

    public function showEditForm(User $user)
    {
        $this->reset('name');
        $this->resetErrorBag();
        $this->dispatch('openEditModal');
        $this->resetValidation();
        $this->selectedUser = $user;
        $this->name = $this->selectedUser->name;
    }

    public function showCreateForm()
    {
        $this->reset('name');
        $this->resetErrorBag();
        $this->dispatch('openModal');
    }

    // public function updateUser()
    // {
    //     $newData = $this->validate([
    //         'name' => ['string', 'unique:tags,name,' . $this->selectedUser->id . '', 'required', 'min:2'],
    //     ]);
    //     User::where('id', $this->selectedUser->id)
    //         ->update([
    //             'name' => $newData['name'],
    //         ]);
    //     Toastr()->success(trans('The User has been updated'));
    //     $this->alert('success', trans('The User has been updated'));

    //     $this->closeModal();
    // }

    public function addUser()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $newData = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        User::create([
            'name' => $newData['name'],
            'email' => $newData['email'],
            'role_id' => 3, //editor
            'password' => Hash::make($newData['password'])
        ]);
        Toastr()->success("l'Utilisateur a été crée ");
        // $this->alert('success', "l'Utilisateur a été crée");
        // Toastr()->success(trans('The response was successfully sent to ') . $contact->name);



        $this->closeModal();
    }

    public function deleteUser($id)
    {
        $this->deleteId = $id;
        $this->name = (User::find($this->deleteId))->name;
    }

    public function showDeleteForm(User $user)
    {
        $this->dispatch('openDeleteModal');
        $this->deleteId = $user->id;
        $this->name = $user->name;
    }

    public function destroyUser()
    {
        $this->deleteUser = User::find($this->deleteId);
        $this->deleteUser->delete();
        Toastr()->success("l'utilisateur a été supprimé");
        $this->alert('success', "l'utilisateur a été supprimé");
        $this->closeModal();
    }

    public function resetAttributes()
    {
        $this->reset(['name', 'deleteId', 'selectedUser', 'deleteUser']);
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

        // Toastr()->success(trans('The response was successfully sent to ') . $contact->name);

        $this->alert('success', $message);

        return back();
    }
    public function render()
    {
        return view('livewire.admin.manage-users', [
            'users' => User::query()->latest()->with('role:id,name')->paginate(5),
            'totalUsers' => User::count()
        ]);
    }
}
