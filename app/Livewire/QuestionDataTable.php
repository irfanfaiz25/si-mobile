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

    public function deleteQuestion($id)
    {
        $question = Question::with('category')->where('id', $id)->first();
        $category = $question->category->name;

        Question::destroy($id);

        return redirect()->to(route('question-data', $category))->with('success', 'Data berhasil di hapus!');
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
