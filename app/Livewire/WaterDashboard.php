<?php

namespace App\Http\Livewire ;

use Livewire\Component;

class WaterDashboard extends Component
{
    public $suggestion = null;

    
    public function generateWaterSuggestion()
    {
        
        $prompt = "Hoje fiz muito exercício, devo beber mais água?";

        
        $this->suggestion = generateSuggestionWithOllama($prompt);
    }

    public function render()
    {
        return view('livewire.water-dashboard');
    }
}
