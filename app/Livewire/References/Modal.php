<?php

namespace App\Livewire\References;

use App\Models\References;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Modal extends Component
{
    #[Validate('required')]
    public $description;

    // #[Validate('required')]
    public $parent_id, $categories;

    public function mount()
    {
        $this->categories = References::whereNull('parent_id')->get();
    }

    public function submit()
    {
        $this->validate();

        References::create(
            $this->only(['description', 'parent_id'])
        );

        return $this->redirect('/references');
    }
    public function render()
    {
        return view('livewire.references.modal');
    }
}
