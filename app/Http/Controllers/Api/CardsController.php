<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Card\StoreRequest;
use App\Models\Card;

class CardsController extends Controller
{
    public function store(StoreRequest $request)
    {
        // TODO : créer un service qui va télécharger l'image et utiliser un observer qui va appeler ce service
        return Card::create($request->validated());
    }
}
