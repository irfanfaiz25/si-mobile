<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Respondent;
use Livewire\Component;

class ChartResult extends Component
{
    public $chartsData = [];

    public function mount($category_id)
    {
        $questions = Question::with('respondents')->where('category_id', $category_id)->get();

        foreach ($questions as $question) {
            $totalResponses = $question->respondents->count();
            $answerCounts = $question->respondents->groupBy('answer')->map->count();

            $this->chartsData[] = [
                'question' => $question->text,
                'total' => $totalResponses,
                'labels' => $answerCounts->keys()->toArray(),
                'data' => $answerCounts->map(function ($count) use ($totalResponses) {
                    return ($count / $totalResponses) * 100;
                })->toArray()
            ];
        }
    }

    public function render()
    {
        return view('admin.livewire.chart-result');
    }
}
