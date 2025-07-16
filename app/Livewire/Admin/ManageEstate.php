<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Estate;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManageEstate extends Component
{
    use WithPagination, WithFileUploads, LivewireAlert;

    protected $paginationTheme = 'bootstrap';

    public $location, $description, $image, $area, $town, $price, $selectedEstate, $deleteId, $search = '';
    public $sortField = 'created_at', $sortDirection = 'desc';

    // Ajout des listeners pour les événements JavaScript
    protected $listeners = ['clearSearch' => 'clearSearch'];

    protected $rules = [
        'image' => 'nullable|image|mimes:jpeg,jpg,png|max:6144',
        'location' => 'required|string|max:255',
        'description' => 'nullable|string|max:400',
        'town' => 'required|string|max:255',
        'price' => 'nullable|numeric|min:0',
        'area' => 'nullable|numeric|min:0',
    ];

    protected $messages = [
        'image.image' => 'Le fichier doit être une image.',
        'image.mimes' => 'L\'image doit être au format JPEG, JPG ou PNG.',
        'image.max' => 'L\'image ne doit pas dépasser 6 Mo.',
        'location.required' => 'La localité est obligatoire.',
        'location.max' => 'La localité ne doit pas dépasser 255 caractères.',
        'town.required' => 'La ville est obligatoire.',
        'town.max' => 'La ville ne doit pas dépasser 255 caractères.',
        'description.max' => 'La description ne doit pas dépasser 400 caractères.',
        'price.numeric' => 'Le prix doit être un nombre.',
        'price.min' => 'Le prix ne peut pas être négatif.',
        'area.numeric' => 'La superficie doit être un nombre.',
        'area.min' => 'La superficie ne peut pas être négative.',
    ];

    /**
     * Reset pagination when search changes
     */
    public function updatingSearch()
    {
        $this->resetPage();
    }

    /**
     * Reset pagination when sort changes
     */
    public function updatingSortField()
    {
        $this->resetPage();
    }

    /**
     * Close the modal and reset form fields
     */
    public function closeModal()
    {
        $this->reset(['location', 'description', 'image', 'area', 'town', 'price', 'selectedEstate', 'deleteId']);
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('closeModal');
    }

    /**
     * Show the edit form with pre-filled data
     */
    public function showEditForm($estateId)
    {
        try {
            $this->selectedEstate = Estate::findOrFail($estateId);
            $this->location = $this->selectedEstate->location;
            $this->description = $this->selectedEstate->description;
            $this->town = $this->selectedEstate->town;
            $this->price = $this->selectedEstate->price;
            $this->area = $this->selectedEstate->area;
            $this->resetErrorBag();
            $this->dispatch('openModal');
        } catch (\Exception $e) {
            $this->alert('error', 'Erreur lors du chargement des données du terrain.');
        }
    }

    /**
     * Show the create form
     */
    public function showCreateForm()
    {
        $this->reset(['location', 'description', 'image', 'area', 'town', 'price', 'selectedEstate']);
        $this->resetErrorBag();
        $this->resetValidation();
        $this->dispatch('openModal');
    }

    /**
     * Add a new estate
     */
    public function addEstate()
    {
        $this->validate();

        try {
            $imagePath = null;
            if ($this->image) {
                // Générer un nom unique pour l'image
                $filename = 'estates/' . time() . '_' . Str::random(10) . '.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('public', $filename);
                $imagePath = $filename;
            }

            Estate::create([
                'location' => trim($this->location),
                'description' => trim($this->description),
                'town' => trim($this->town),
                'price' => $this->price,
                'area' => $this->area,
                'user_id' => auth()->id(),
                'image' => $imagePath,
            ]);

            $this->alert('success', 'Terrain ajouté avec succès.');
            $this->closeModal();
        } catch (\Exception $e) {
            $this->alert('error', 'Erreur lors de l\'ajout du terrain.');
        }
    }

    /**
     * Update an existing estate
     */
    public function updateEstate()
    {
        $this->validate();

        try {
            // Supprimer l'ancienne image si une nouvelle est uploadée
            if ($this->image && $this->selectedEstate->image) {
                if (Storage::exists('public/' . $this->selectedEstate->image)) {
                    Storage::delete('public/' . $this->selectedEstate->image);
                }
            }

            $updateData = [
                'location' => trim($this->location),
                'description' => trim($this->description),
                'town' => trim($this->town),
                'price' => $this->price,
                'area' => $this->area,
            ];

            if ($this->image) {
                $filename = 'estates/' . $this->selectedEstate->id . '_' . time() . '.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('public', $filename);
                $updateData['image'] = $filename;
            }

            $this->selectedEstate->update($updateData);

            $this->alert('success', 'Terrain modifié avec succès.');
            $this->closeModal();
        } catch (\Exception $e) {
            $this->alert('error', 'Erreur lors de la modification du terrain.');
        }
    }

    /**
     * Show delete confirmation modal
     */
    public function showDeleteForm($estateId)
    {
        try {
            $estate = Estate::findOrFail($estateId);
            $this->deleteId = $estateId;
            $this->location = $estate->location;
            $this->dispatch('openDeleteModal');
        } catch (\Exception $e) {
            $this->alert('error', 'Terrain introuvable.');
        }
    }

    /**
     * Delete an estate
     */
    public function destroyEstate()
    {
        try {
            $estate = Estate::findOrFail($this->deleteId);

            // Supprimer l'image si elle existe
            if ($estate->image && Storage::exists('public/' . $estate->image)) {
                Storage::delete('public/' . $estate->image);
            }

            $estate->delete();
            $this->alert('success', 'Terrain supprimé avec succès.');
            $this->closeModal();
        } catch (\Exception $e) {
            $this->alert('error', 'Erreur lors de la suppression du terrain.');
        }
    }

    /**
     * Toggle user account status
     */
    public function updateStatus(User $user)
    {
        try {
            $user->is_active = !$user->is_active;
            $user->save();

            $this->alert('success', $user->is_active ? 'Compte débloqué avec succès.' : 'Compte bloqué avec succès.');
        } catch (\Exception $e) {
            $this->alert('error', 'Erreur lors de la mise à jour du statut.');
        }
    }

    /**
     * Sort table by field
     */
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    /**
     * Clear search
     */
    public function clearSearch()
    {
        $this->search = '';
        $this->resetPage();
    }

    /**
     * Render the component
     */
    public function render()
    {
        $estates = Estate::query()
            ->with('user')
            ->when($this->search, function ($query) {
                $searchTerm = '%' . trim($this->search) . '%';
                return $query->where(function ($q) use ($searchTerm) {
                    $q->where('location', 'like', $searchTerm)
                        ->orWhere('town', 'like', $searchTerm)
                        ->orWhere('description', 'like', $searchTerm)
                        ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                            $userQuery->where('name', 'like', $searchTerm);
                        });
                });
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        $totalEstates = Estate::count();

        return view('livewire.admin.manage-estate', [
            'estates' => $estates,
            'totalEstates' => $totalEstates,
        ]);
    }
}
