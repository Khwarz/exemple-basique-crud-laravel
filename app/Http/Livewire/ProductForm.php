<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    public Product $product;

    protected $rules = [
        'product.label' => 'required|string|max:255',
        'product.quantity' => 'required|numeric|min:0',
        'product.price' => 'required|numeric|min:0',
        'product.description' => 'required|string|min:10',
    ];

    public function mount(Product $product) {
        $this->product = $product ?? new Product;
    }

    public function save() {
        $this->validate();
        $this->product->save();
        redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.product-form');
    }
}
