<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Card\StoreRequest;
use App\Models\Card;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;

class CardsController extends Controller
{
    /**
     * @throws GuzzleException
     */
    public function store(StoreRequest $request): Card|Response
    {
        Storage::disk('local')->exists('cards') || Storage::disk('local')->makeDirectory('cards');

        try {
            $client = new Client();
            $client->request('GET', $request->input('image'), [
                'sink' => Storage::disk('local')->path("cards/{$request->input('number')}.jpg"),
            ]);
            if ($request->input('land')) {
                $manager = ImageManager::gd();
                $image = $manager->read(Storage::disk('local')->path("cards/{$request->input('number')}.jpg"));
                $image->rotate(-90)->save(Storage::disk('local')->path("cards/{$request->input('number')}.jpg"));
            }
        } catch (Exception $exception) {
            Log::error($exception->getMessage());

            return response(['Download image not work'], 500);
        }

        return Card::create([
            'number' => $request->input('number'),
            'name' => $request->input('name'),
            'image' => "{$request->input('number')}.jpg",
        ]);
    }
}
