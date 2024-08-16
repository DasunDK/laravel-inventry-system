<?php

namespace App\Livewire;

use Log;
use Storage;
use App\Models\Product;
use Livewire\Component;
use App\Models\Villager;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class HomePageTable extends Component
{

    use WithPagination;
    public $search;



    public function gotoEditFrom($id)
    {
        session()->put('editId', $id);
        $this->redirect('product-edit');
    }

    public function deleteProduct($id)
    {
        try {
            // Find the product by ID
            $product = Product::findOrFail($id);

            // Optionally delete the product's image from storage
            if ($product->image && \Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Delete the product
            $product->delete();

            // Flash success message
            session()->flash('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Error deleting product: ' . $e->getMessage());
            session()->flash('error', 'An error occurred while deleting the product.');
        }
    }

    public function render()
    {
        $user_id = Auth::id();

        // $rows = Villager::where('user_id', $user_id);

        return view('livewire.home-page-table');
    }
}
