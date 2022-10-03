<?php

namespace App\Http\Livewire;

use App\Models\product;
use Livewire\Component;

class ProductList extends Component
{
    public $products;
    public function render()
    {
        $this->products=product::all();
        return view('livewire.product-list');
    }
}
