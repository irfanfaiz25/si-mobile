<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Question;
use Livewire\Component;

class UserQuestions extends Component
{
    public $example = "this is question";

    public function render()
    {
        $categories = Category::with('questions')->get();
        return view('user.livewire.user-questions', [
            'categories' => $categories
        ]);
    }
}
