<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Level as LevelModel;

class Level extends Component
{
    public $search= '';
    public function render()
    {
        $levels = LevelModel::select('levels.*')->when(trim($this->search), function ($q) {
            $search = '%' . $this->search . '%';
            return $q->where('levels.name', 'like', $search);
        })->get();
        return view('livewire.level',['levels' => $levels]);
    }
}
