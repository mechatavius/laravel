<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SolarSystemController;


Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets', [UserController::class, 'index']);
Route::get('/solarsystems', [SolarSystemController::class, 'index'])->name('solarsystems.index');
Route::get('/solarsystems/{id}', [SolarSystemController::class, 'show'])->name('solarsystems.show');

Route::get('planets/{planet}', function ($planet) {
    
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.',
            'size_in_km' => 'groot'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.',
            'size_in_km' => 'groot'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.',
            'size_in_km' => 'groot'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.',
            'size_in_km' => 'groot'
        ],
    ];
    return view('planets', ['planeten' => $planets]);
    
    

    if (request()->has('planets')) {
        $filteredPlanets = array_filter($planets, function ($planetData) {
            return $planetData['name'] == request()->input('planeet');
        });
        return view('planets', ['planeten' => $filteredPlanets]);
    } else {
        return view('planets', ['planeten' => $planets]);
    }
});


