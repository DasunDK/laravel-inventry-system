<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    public $product;

    use WithFileUploads;

    // Validation rules
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

    // #[Rule('nullable|sometimes|image|max:2048')]
    public $currentImg;

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
        $this->currentImg = $this->product->image;
    }

    public function updateProduct()
    {
        // Validate form inputs
        $this->validate();

        // Handle image upload
        if ($this->img) {
            $imgURL = $this->img->store("products/{$this->category}", 'public');
        } else {
            $imgURL = $this->currentImg;
        }


        // Check if category exists, if not, create it
        $category = Category::firstOrCreate(['name' => $this->category]);

        // Update product
        $this->product->update([
            'name' => $this->productName,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'category_id' => $category->id,
            'sku' => $this->sku,
            'image' => $imgURL
        ]);

        // Set flash message and redirect
        session()->flash('success', 'Product updated successfully!');
        return redirect()->route('root');
    }

    public function render()
    {
        return view('livewire.product-edit');
    }
}
