<?php

namespace App\Livewire;

use Livewire\Component;

class Brand extends Component
{
    public $brands;
    public function mount($brands)
    {
        $this->brands = $brands;
    }
    public function render()
    {
        return view("livewire.brand.brand");
    }
}
