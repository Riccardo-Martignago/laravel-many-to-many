@extends('layouts.app')

@section('content')
    <h1> Aggiungi Progetto </h1>
    <section>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" placeholder="Nome" aria-label="name" value="{{  $project->name }}">
            </div>
            <div>
                <select class="form-select" aria-label="Default select example" name="type_id">
                    <option selected>Scegli la tipologia</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" id="description" name="description" class="form-control" placeholder="Descrizione" aria-label="Description" value="{{ $project->description }}">
            </div>
            <button type="submit" class="btn btn-primary" value="Create project">Aggiorna</button>
        </form>
    </section>
@endsection
