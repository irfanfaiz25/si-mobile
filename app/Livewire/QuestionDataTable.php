<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class QuestionDataTable extends Component
{
    use WithPagination;

    public $category;
    public $search_question;

    public function updatingSearchQuestion()
    {
        $this->resetPage();
    }

    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        $category_name = $this->category;

        $questions = Question::whereHas('category', function ($query) use ($category_name) {
            $query->where('name', $category_name);
        })->where('text', 'like', "%$this->search_question%")->paginate(10);

        return view('admin.livewire.question-data-table', [
            'questions' => $questions
        ]);     
    }
}
