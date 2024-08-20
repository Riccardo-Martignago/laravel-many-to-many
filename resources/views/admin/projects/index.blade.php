@extends('layouts.app')

@section('content')
    <article class="container">
        <a href="{{ route ('admin.projects.create')}}">Aggiungi Progetto</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Tipo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->type->name }}</td>
                        <td>
                            <a href="{{ route ('admin.projects.show', $project) }}" class="card-link"> Progetto </a>
                            <a href="{{ route ('admin.projects.edit', $project) }}" class="card-link"> Aggiorna </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </article>
@endsection
