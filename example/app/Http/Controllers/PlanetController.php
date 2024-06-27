<?php

namespace App\Http\Controllers;

class PlanetController extends Controller
{
    private $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    public function index()
    {
        return view('planets.index', ['planets' => $this->planets]);
    }

    public function show($planet)
    {
        $planet = ucfirst($planet);
        $filteredPlanets = array_filter($this->planets, function ($planetData) use ($planet) {
            return $planetData['name'] == $planet;
        });
        if (count($filteredPlanets) > 0) {
            return view('planets.show', ['planet' => $filteredPlanets[0]]);
        } else {
            abort(404);
        }
    }
}