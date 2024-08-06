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
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" id="name" name="name" placeholder="Nome" aria-label="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" id="description" name="description" class="form-control" placeholder="Descrizione" aria-label="Description" value="{{ old('description') }}">
            </div>
            <label for="type_id">Type</label>
            <select name="type_id" id="type_id">
                <option value="">Seleziona un tipo</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary" value="Create project">Crea</button>
        </form>
    </section>
@endsection
