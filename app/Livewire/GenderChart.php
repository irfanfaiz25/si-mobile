<?php

namespace App\Livewire;

use App\Models\Respondent;
use Livewire\Component;

class GenderChart extends Component
{

    public $maleRespondent;
    public $femaleRespondent;



    public function render()
    {
        return view('livewire.gender-chart');
    }

    public function mount()
    {
        $this->loadChartsData();
    }

    public function loadChartsData()
    {
        $maleRespondent = Respondent::where('gender', 'laki-laki')->distinct('respondent_code')->count();
        $femaleRespondent = Respondent::where('gender', 'perempuan')->distinct('respondent_code')->count();

        $this->maleRespondent = $maleRespondent;
        $this->femaleRespondent = $femaleRespondent;
    }
}
