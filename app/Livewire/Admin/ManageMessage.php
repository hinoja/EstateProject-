<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Notifications\ResponseNotification;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageMessage extends Component
{
    use WithPagination, LivewireAlert;

    public $reply;

    public $displayContact;

    protected $paginationTheme = 'bootstrap';

    public function closeModal()
    {
        $this->reset(['reply', 'displayContact']);
        $this->resetErrorBag();
        $this->dispatch('closeModal');
    }

    public function showModalForm(Contact $contact)
    {

        $this->resetValidation();
        $this->dispatch('openModal');
        $this->displayContact = $contact;
    }

    public function replyMessage(Contact $contact)
    {
        $this->dispatch('showFormReply');
        $response = $this->validate([
            'reply' => ['required', 'string'],
        ]);
        $contact->response = $response['reply'];
        $contact->save();

        $data = [
            'subject' => $contact->subject,
            'created_at' => $contact->created_at,
            'response' => $contact->response,
        ];

        Notification::send($contact, new ResponseNotification($data));

        $this->closeModal();
        Toastr()->success(trans('The response was successfully sent to ') . $contact->name);

        $this->alert('success', trans('The response was successfully sent to ') . $contact->name,);

        // toast(trans('The response was successfully sent to ') . $contact->name, 'success');

        return redirect()->route('dashboard.messages');
    }
    public function render()
    {
        return view('livewire.admin.manage-message', [
            'contacts' => Contact::query()->latest()->paginate(8),
            'totalMessages' => Contact::count()
        ]);
    }
}
