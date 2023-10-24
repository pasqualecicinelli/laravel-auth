@extends('layouts.app')

@section('content')
    <div class="container mt-5">


        <form action="{{ route('admin.projects.update', $project) }}" method="POST">

            @method('PUT')
            @csrf

            <div class="my-3">
                <label for="name">Nome progetto</label>
                <input class="form-control @error('name') is-invalid @enderror mt-2" type="text" id="name"
                    name="name" placeholder="Nome progetto" aria-label="default input example"
                    value={{ old('name') ?? $project->name }}>
            </div>

            <div class="my-3">
                <label for="repo">Nome della Repo progetto</label>
                <input class="form-control @error('repo') is-invalid @enderror mt-2" type="text" id="repo"
                    name="repo" placeholder="Nome della repo progetto" aria-label="default input example"
                    value={{ old('repo') ?? $project->repo }}>
            </div>

            <div class="my-3">
                <label for="slug">Slug del progetto</label>
                <input class="form-control @error('slug') is-invalid @enderror mt-2" type="text" id="slug"
                    name="slug" placeholder="Slug del progetto" aria-label="default input example"
                    value={{ old('slug') ?? $project->slug }}>
            </div>

            <div class="my-3">
                <label for="link" class="form-label"></label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">Inserisci il link della Repo</span>
                    <input type="text" class="form-control" name="link" id="link"
                        placeholder="https://example.com/users/" aria-describedby="basic-addon3 basic-addon4"
                        value={{ old('link') ?? $project->link }}>
                </div>
            </div>

            <div class="input-group my-4">
                <span class="input-group-text">Descrizione</span>
                <label for="description" class="form-label"></label>
                <textarea id="description" name="description" class="form-control" aria-label="With textarea">{{ old('description') ?? $project->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Salva</button>
            <a href={{ route('admin.projects.index') }} class="btn btn-primary my-3">Indietro</a>


        </form>


    </div>
@endsection
