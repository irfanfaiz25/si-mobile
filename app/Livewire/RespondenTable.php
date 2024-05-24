<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Respondent;
use Livewire\Component;
use Livewire\WithPagination;


class RespondenTable extends Component
{
    use WithPagination;

    public $questionsGroupedByCategory;
    public $respondents;

    public function mount()
    {
        $questions = Question::with('category')->get();

        $this->questionsGroupedByCategory = $questions->groupBy('category.name')->all();

        $respondents = Respondent::all()->groupBy('respondent_code');

        $this->respondents = $respondents->map(function ($respondentGroup) {
            $data = [
                'respondent_code' => $respondentGroup->first()->respondent_code,
                'respondent_name' => $respondentGroup->first()->name,
            ];

            foreach ($respondentGroup as $respondent) {
                $data['Q' . $respondent->question_id] = $respondent->answer;
            }

            return $data;
        });
    }

    public function refreshData()
    {
        $questions = Question::with('category')->get();

        $this->questionsGroupedByCategory = $questions->groupBy('category.name')->all();

        $respondents = Respondent::all()->groupBy('respondent_code');

        $this->respondents = $respondents->map(function ($respondentGroup) {
            $data = [
                'id' => $respondentGroup->first()->id,
                'respondent_code' => $respondentGroup->first()->respondent_code,
                'respondent_name' => $respondentGroup->first()->name,
            ];

            foreach ($respondentGroup as $respondent) {
                $data['Q' . $respondent->question_id] = $respondent->answer;
            }

            return $data;
        });
    }

    public function render()
    {
        // $respondents = Respondent
        return view('admin.livewire.responden-table', [
            'respondents' => $this->respondents,
            'questionsGroupedByCategory' => $this->questionsGroupedByCategory,
        ]);
    }
}
