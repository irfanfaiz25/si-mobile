<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Question;
use App\Models\Respondent;
use Livewire\Component;

class UserQuestions extends Component
{
    // public $questions = [];
    public $answers = [];
    public $respondentName;
    public $respondentGender;
    public $date;


    public function updated($questionId, $value)
    {
        // dd($questionId, $value, $this->answers);

        $this->answers[$questionId] = $value;
    }

    public function submit()
    {
        $questionIds = array_keys(array_filter($this->answers, function ($key) {
            return is_numeric($key);
        }, ARRAY_FILTER_USE_KEY));

        $answers = array_intersect_key($this->answers, array_flip($questionIds));
        $respondentName = $this->answers['respondentName'];
        $respondentGender = $this->answers['respondentGender'];
        $date = $this->answers['date'];

        // Prepare the data for insertion
        $responses = [];
        foreach ($questionIds as $questionId) {
            Respondent::create([
                'name' => $respondentName,
                'gender' => $respondentGender,
                'date' => $date,
                'question_id' => $questionId,
                'response' => $answers[$questionId],
            ]);
        }

        // Insert data into the respondents table
        // Respondent::insert($responses);
    }

    public function optionCategory($category)
    {
        if ($category == "control") {
            return "efisien";
        } else {
            return "baik";
        }
    }

    public function render()
    {
        $categories = Category::with('questions')->get();
        return view('user.livewire.user-questions', [
            'categories' => $categories
        ]);
    }
}
