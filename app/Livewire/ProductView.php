<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductView extends Component
{
    public $product;

    public $productName;
    public $description;
    public $price;
    public $quantity;
    public $category;
    public $sku;
    public $img;

    public function mount($id)
    {
        // Load the product
        $this->product = Product::findOrFail($id);

        // Load data to form fields
        $this->productName = $this->product->name;
        $this->description = $this->product->description;
        $this->price = $this->product->price;
        $this->quantity = $this->product->quantity;
        $this->category = $this->product->category ? $this->product->category->name : null;
        $this->sku = $this->product->sku;
        $this->img = $this->product->image;
    }

    public function render()
    {
        return view('livewire.product-view');
    }
}
