<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Respondent;
use Livewire\Component;

class CardDashboard extends Component
{
    public $question_total;
    public $respondent_total;

    public function mount()
    {
        $question_total = Question::all()->count();
        $respondent_total = Respondent::all()->groupBy('respondent_code')->count();

        $this->question_total = $question_total;
        $this->respondent_total = $respondent_total;
    }

    public function render()
    {
        return view('admin.livewire.card-dashboard');
    }
}
