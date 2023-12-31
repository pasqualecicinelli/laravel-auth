@extends('layouts.app')

@section('content')
    <h3>Modifica il Progetto</h3>


    @if ($errors->any())
        <div class="alert alert-danger">
            <h4>Correggi gli errori:</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.projects.update', $project) }}" method="POST">

        @method('PUT')
        @csrf

        <div class="my-3">
            <label for="name_prog">Nome progetto</label>
            <input class="form-control @error('name_prog') is-invalid @enderror mt-2" type="text" id="name_prog"
                name="name_prog" placeholder="for ex: Titolo nome progetto" aria-label="default input example"
                value="{{ old('name_prog') ?? $project->name_prog }}">
            @error('name_prog')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-3">
            <label for="repo">Nome della Repo progetto</label>
            <input class="form-control @error('repo') is-invalid @enderror mt-2" type="text" id="repo"
                name="repo" placeholder="for ex: repo-nome-progetto" aria-label="default input example"
                value="{{ old('repo') ?? $project->repo }}">
            @error('repo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="my-3">
            <label for="link" class="form-label"></label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon3">Inserisci il link della Repo</span>
                <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="link"
                    placeholder="https://example.com/users/" aria-describedby="basic-addon3 basic-addon4"
                    value="{{ old('link') ?? $project->link }}">
                @error('link')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="input-group my-4">
            <span class="input-group-text">Descrizione</span>
            <label for="description" class="form-label"></label>
            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                aria-label="With textarea">{{ old('description') ?? $project->description }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
        <a href={{ route('admin.projects.index') }} class="btn btn-primary my-3">Indietro</a>


    </form>
@endsection
