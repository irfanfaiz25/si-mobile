<?php

namespace App\Livewire;

use App\Models\Question;
use App\Models\Respondent;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;


class RespondenTable extends Component
{
    use WithPagination;

    public $questionsGroupedByCategory;
    public $respondents;

    public $reportData = [];

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
                $answer = $respondent->answer;
                $answer_code = 'N/A';
                if ($answer == 'sangat tidak baik' || $answer == 'sangat tidak efisien') {
                    $answer_code = '1';
                } elseif ($answer == 'tidak baik' || $answer == 'tidak efisien') {
                    $answer_code = '2';
                } elseif ($answer == 'ragu-ragu') {
                    $answer_code = '3';
                } elseif ($answer == 'baik' || $answer == 'efisien') {
                    $answer_code = '4';
                } elseif ($answer == 'sangat baik' || $answer == 'sangat efisien') {
                    $answer_code = '5';
                }

                $data['Q' . $respondent->question_id] = $answer_code;
            }

            $this->reportData = $data;

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
                'respondent_code' => $respondentGroup->first()->respondent_code,
                'respondent_name' => $respondentGroup->first()->name,
            ];

            foreach ($respondentGroup as $respondent) {
                $answer = $respondent->answer;
                $answer_code = 'N/A';
                if ($answer == 'sangat tidak baik' || $answer == 'sangat tidak efisien') {
                    $answer_code = '1';
                } elseif ($answer == 'tidak baik' || $answer == 'tidak efisien') {
                    $answer_code = '2';
                } elseif ($answer == 'ragu-ragu') {
                    $answer_code = '3';
                } elseif ($answer == 'baik' || $answer == 'efisien') {
                    $answer_code = '4';
                } elseif ($answer == 'sangat baik' || $answer == 'sangat efisien') {
                    $answer_code = '5';
                }

                $data['Q' . $respondent->question_id] = $answer_code;
            }

            $this->reportData = $data;

            return $data;
        });
    }

    public function exportReport()
    {
        $data = $this->reportData;

        $pdf = Pdf::loadView('admin.pdf.report', $data, ['respondents' => $this->respondents, 'questionsGroupedByCategory' => $this->questionsGroupedByCategory])->setPaper('a4', 'landscape');
        return response()->streamDownload(
            fn() => print ($pdf->output()),
            'report.pdf'
        );
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
