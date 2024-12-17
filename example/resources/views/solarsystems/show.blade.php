@extends('layouts.app')

@section('content')
    <h1>{{ $solarSystem->name }}</h1>
    <h2>Planeten</h2>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solarSystem->planets as $planet)
                <tr>
                    <td>{{ $planet->name }}</td>
                    <td>{{ $planet->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('solarsystems.index') }}">Terug naar Zonnestelsels</a>
@endsection