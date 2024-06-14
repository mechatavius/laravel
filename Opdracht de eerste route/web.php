<?php

use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {
    $planeten = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
    return view('planets', ['planeten' => $planeten]);
});

