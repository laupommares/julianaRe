<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReviewsCarousel extends Component
{
    public $reviews;
    public $currentPage = 0;
    public $perPage = 2;

    public function mount($reviews)
    {
        $this->reviews = $reviews;
    }

    public function nextPage()
    {
        if ($this->currentPage < count($this->reviews) / $this->perPage - 1) {
            $this->currentPage++;
        }
    }

    public function prevPage()
    {
        if ($this->currentPage > 0) {
            $this->currentPage--;
        }
    }

    public function render()
    {
        $start = $this->currentPage * $this->perPage;
        $paginatedReviews = array_slice($this->reviews, $start, $this->perPage);

        return view('livewire.google-reviews', compact('paginatedReviews'));
    }
}
