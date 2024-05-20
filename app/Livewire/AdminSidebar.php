<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AdminSidebar extends Component
{
    public $active_link;
    public $categories;
    public $tab;

    public function mount($active_link, $tab)
    {
        $this->active_link = $active_link;
        $this->categories = Category::orderBy('id', 'asc')->pluck('name');
        $this->tab = $tab;
    }

    public function render()
    {
        return view('admin.livewire.admin-sidebar');
    }
}
