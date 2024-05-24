<?php

namespace App\Livewire;

use livewire\Attributes\Validate;
use App\Models\Category;
use App\Models\Question;
use App\Models\Respondent;
use Livewire\Component;
use illuminate\Support\Str;

class UserQuestions extends Component
{
    // #[Validate('required')]
    public $respondentName;

    // #[Validate('required')]
    public $respondentGender;

    // #[Validate('required')]
    public $date;

    public $answers = [];


    public function updated($questionId, $value)
    {
        $this->answers[$questionId] = $value;
    }

    public function submit()
    {
        $this->validate([
            'respondentName' => 'required',
            'respondentGender' => 'required',
            'date' => 'required'
        ]);

        $questionIds = array_keys(array_filter($this->answers, function ($key) {
            return is_numeric($key);
        }, ARRAY_FILTER_USE_KEY));

        $answers = array_intersect_key($this->answers, array_flip($questionIds));
        $respondentName = $this->answers['respondentName'];
        $respondentGender = $this->answers['respondentGender'];
        $date = $this->answers['date'];

        $uniqueCode = $this->generateUniqueCode();

        foreach ($questionIds as $questionId) {
            Respondent::create([
                'respondent_code' => $uniqueCode,
                'name' => $respondentName,
                'gender' => $respondentGender,
                'date' => $date,
                'question_id' => $questionId,
                'answer' => $answers[$questionId],
            ]);
        }

        $this->reset('respondentName', 'respondentGender', 'date');
        $this->answers = [];

        session()->flash('success', 'Terimakasih telah bersedia mengisi kuisioner ini.');
    }

    public function resetForm()
    {
        $this->reset('respondentName', 'respondentGender', 'date');
        $this->answers = [];
    }

    public function optionCategory($category)
    {
        if ($category == "control") {
            return "efisien";
        } else {
            return "baik";
        }
    }

    public function generateUniqueCode()
    {
        $uniqueCode = Str::random(20);

        while (Respondent::where('respondent_code', $uniqueCode)->exists()) {
            $uniqueCode = Str::random(20);
        }

        return $uniqueCode;
    }

    public function render()
    {
        $categories = Category::with('questions')->get();
        return view('user.livewire.user-questions', [
            'categories' => $categories
        ]);
    }
}
