<?php

namespace App\Livewire\Components\Search;

use Livewire\Component;

class ShowDetail extends Component
{
    public $result;
    public $modelClass;
    public $routeBack;

    public function mount($slug, $modelClass, $routeBack)
    {
        $this->modelClass = $modelClass;
        $this->routeBack = $routeBack;
        $this->result = $this->modelClass::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.components.search.show-detail', [
            'result' => $this->result,
            'routeBack' => $this->routeBack
        ])->layout('livewire.layouts.app');
    }
}
