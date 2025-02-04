@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h1>Réservations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nom d'utilisateur</th>
                <th>Adresse E-mail</th>
                <th>Téléphone</th>
                <th>Message</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Espace de travail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->mail }}</td>
                <td>{{ $reservation->phone }}</td>
                <td>{{ $reservation->Message }}</td>
                <td>{{ $reservation->datestart }}</td>
                <td>{{ $reservation->dateend }}</td>
                <td>{{ $reservation->space->Post_id->title_fr}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
