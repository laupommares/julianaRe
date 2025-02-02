<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class GoogleReviews extends Component
{
    public $reviews = [];
    public $errorMessage = null;
    public $averageRating = 0;

    public function mount()
    {
        $this->fetchGoogleReviews();
    }

    public function fetchGoogleReviews()
    {
        $placeId = env('GOOGLE_PLACE_ID'); // Place ID desde .env
        $apiKey = env('GOOGLE_API_KEY'); // API Key desde .env
    
        try {
            $response = Http::get("https://maps.googleapis.com/maps/api/place/details/json", [
                'place_id' => $placeId,
                'key' => $apiKey,
                'fields' => 'reviews,rating', // Asegurar que traemos rating
                'language' => 'es',
            ]);
    
            if ($response->successful() && $response->json('status') === 'OK') {
                $this->reviews = $response->json('result.reviews') ?? [];
                // Asignar el rating promedio directamente desde la respuesta
                $this->averageRating = $response->json('result.rating') ?? 0;
            } else {
                $this->errorMessage = $response->json('error_message') ?? 'No se pudieron obtener las reseñas.';
            }
        } catch (\Exception $e) {
            $this->errorMessage = 'Error al conectarse a la API de Google: ' . $e->getMessage();
        }
    }
    

    public function render()
    {
        return view('livewire.google-reviews');
    }
}
