@extends('layouts.app')

@section('content')
    <article class="container">
        <h1>Progetto:</h1>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $project->name }}</h2>
                <p>Tipo: {{ $project->type->name }}</p>
                <p class="card-text">{{ $project->description }}</p>
                <a href="{{ route('admin.projects.index') }}" class="card-link">Torna alla lista</a>
            </div>
        </div>
        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </article>
@endsection
