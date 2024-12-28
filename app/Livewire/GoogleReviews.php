<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class GoogleReviews extends Component
{
    public $reviews = []; // Inicializamos como un array vacío
    public $errorMessage = null; // Inicializamos como null

    public function mount()
    {
        $this->fetchGoogleReviews();
    }

    public function fetchGoogleReviews()
    {
        $placeId = 'ChIJ6TMJZhalvpURrVdO8eGjoC4'; // Tu Place ID
        $apiKey = 'AIzaSyCeZ6ljJk2Coery3Q3dpcGzHeWkMx3o180'; // Tu clave API

        try {
            $response = Http::get("https://maps.googleapis.com/maps/api/place/details/json", [
                'place_id' => $placeId,
                'key' => $apiKey,
                'fields' => 'reviews',
                'language' => 'es',
            ]);

            if ($response->successful() && $response->json('status') === 'OK') {
                $this->reviews = $response->json('result.reviews') ?? [];
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
