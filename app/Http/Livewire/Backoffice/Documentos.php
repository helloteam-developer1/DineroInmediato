<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Documentos extends Component
{
    public $user;
    public $successMessage = '';

    public function mount(User $user){
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.backoffice.documentos');
    }

    public function export($url)
    {
        return Storage::disk('public_posts')->download($url);
        
    }
}
