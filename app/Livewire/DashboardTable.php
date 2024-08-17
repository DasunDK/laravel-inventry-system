<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardTable extends Component
{
    public function gotoSingleView($id)
    {
        session()->put('productId', $id);
        $this->redirect('product-view');
    }
    public function render()
    {
        return view('livewire.dashboard-table');
    }
}
