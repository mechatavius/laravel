@extends('layouts.app')

@section('content')
    <h1>Zonnestelsels</h1>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Aantal Planeten</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($solarSystems as $solarSystem)
                <tr>
                    <td>{{ $solarSystem->name }}</td>
                    <td>{{ $solarSystem->planets->count() }}</td>
                    <td><a href="{{ route('solarsystems.show', $solarSystem->id) }}">Bekijk</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection