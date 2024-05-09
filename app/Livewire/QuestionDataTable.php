<?php

namespace App\Livewire;

use Livewire\Component;

class QuestionDataTable extends Component
{
    public $category;

    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('admin.livewire.question-data-table');
    }
}
