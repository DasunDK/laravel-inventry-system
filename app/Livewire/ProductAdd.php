<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;


class ProductAdd extends Component
{
    use WithFileUploads;

    // variables and rules

    #[Rule('required|string|min:3|max:30')]
    public $productName;

    #[Rule('nullable|string|min:5|max:255')]
    public $description;

    #[Rule('required|numeric|min:0.01')]
    public $price;

    #[Rule('required|integer|min:1')]
    public $quantity;

    #[Rule('required|string|min:3|max:30')]
    public $category;

    #[Rule('required|string|min:5|max:30')]
    public $sku;

    #[Rule('nullable|sometimes|image|max:2048')]
    public $img;

    public function addProduct()
    {

        $this->validate();

        $this->validate([
            'price' => ['required', 'numeric', 'min:0.01', 'regex:/^\d+(\.\d{1,2})?$/'],
        ]);

        if ($this->img) {
            $imgURL = $this->img->store("products/{$this->category}", 'public');
        } else {
            $imgURL = null;
        }

        $createdCategory = Category::create([
            'name' => $this->category
        ]);

        Product::create([
            'name' => $this->productName,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'category_id' => $createdCategory->id,
            'sku' => $this->sku,
            'image' => $imgURL
        ]);

        $this->reset();

        session()->flash('success', 'Product Added Successfully');
    }

    public function render()
    {
        return view('livewire.product-add');
    }
}
