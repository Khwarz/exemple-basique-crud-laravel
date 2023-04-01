<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsList extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::paginate();
        return view('livewire.products-list', compact('products'));
    }

    public function delete(Product $product) {
        $product->delete();
    }
}
