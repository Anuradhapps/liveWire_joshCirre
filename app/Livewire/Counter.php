<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $num = 0;

    public function resetCount()
    {
        $this->count = 0;
    }
    public function decrement()
    {
        $this->count--;
    }
    public function increment()
    {
        $this->count++;
    }
    public function changeCount()
    {
        $this->count = $this->num;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
