@extends('base-2')
@section('content')
<h1>Liste des livres</h1>
<table class="w-100">
    <thead class="bg-dark text-light">
        <th></th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Date de création</th>
        <th>Date de mise à jour</th>
    </thead>
    <tbody class="bg-light">
        @foreach ($livres as $livre)
            <tr>
                <td>{{ $livre->id }}</td>
                <td>{{ $livre->titre }}</td>
                <td>{{ $livre->auteur }}</td>
                <td>{{ $livre->created_at }}</td>
                <td>{{ $livre->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection