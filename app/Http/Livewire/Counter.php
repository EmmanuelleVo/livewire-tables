<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public string $message = ''; // bidirectionnel :)

    public int $counterValue;

    public function mount()
    { // comme constructeur
        $this->message = 'Best Counter Ever';
        $this->counterValue = 0;
    }

    public function increment()
    {
        $this->counterValue += 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
