@extends('Dashboard.main')

@section('Dashboard')
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Réservations</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
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
                            <td>{{ Str::limit($reservation->Message, 50) }}</td>
                            <td>{{ \Carbon\Carbon::parse($reservation->datestart)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($reservation->dateend)->format('d/m/Y') }}</td>
                            <td>{{ $reservation->space->{'Title_'.$Locale} }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $reservations->links() }}
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border-radius: 10px;
}
.table th {
    background-color: #f8f9fa;
    font-weight: 600;
}
.pagination {
    margin-bottom: 0;
}
</style>
@endsection
