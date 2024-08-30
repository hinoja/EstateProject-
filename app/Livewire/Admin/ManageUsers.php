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
    public $name, $email, $password, $selectedUser, $deleteId, $editId, $deleteUser;

    //CRUD User
    public function closeModal()
    {
        $this->reset('name');
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('closeModal');
    }



    public function showCreateForm()
    {
        $this->reset('name');
        $this->resetErrorBag();
        $this->dispatch('openModal');
    }


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


        $this->closeModal();
    }

    public function deleteUser($id)
    {
        $this->deleteId = $id;
        $this->name = (User::find($this->deleteId))->name;
    }


    // the following both functions help to edit role of a user

    // This function helps to display a  modal text for user
    public function showEditForm(User $user)
    {
        $this->dispatch('openEditModal');
        $this->editId = $user->id;
        $this->name = $user->name;
        $this->selectedUser = $user->role_id;
    }
    // this function update this
    public function UpdateUser()
    {
        $EditUser = User::find($this->editId);
        if ($EditUser->role_id === 3) //editor role
        {
            $EditUser->role_id = 2;
        } elseif ($EditUser->role_id === 2) {
            $EditUser->role_id = 3;
        }
        $EditUser->save();
        // Toastr()->success("l'utilisateur a été supprimé");
        $this->alert('success', "Le rôle a été mis a jour avec succès");
        $this->closeModal();
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
