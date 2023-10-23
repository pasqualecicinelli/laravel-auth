@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="container mt-5">

        <a href="{{ route('admin.projects.create') }}" role="button" class="btn btn-primary">Crea Progetto</a>

        <h1 class="my-5">Lista dei Progetti</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome progetto</th>
                    <th scope="col">Nome della repo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">D-T-M</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->repo }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->updated_at }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}"><i
                                    class="fa-solid text-primary fa-eye"></i></a>

                            <a href="{{ route('admin.projects.edit', $project) }}"><i
                                    class="fa-solid text-warning fa-pen-to-square px-2"></i></a>

                        </td>
                    </tr>

                @empty <h4>Non ci sono progetti</h4>
                @endforelse
            </tbody>
        </table>
        {{ $projects->links('pagination::bootstrap-5') }}

        <div class="d-flex flex-column">
            <h5>*Leggenda D-T-M</h5>
            <span>Mostra i dettagli del Progetto: <i class="fa-solid text-primary fa-eye"></i></span>
            <span>Modifica un Progetto: <i class="fa-solid text-warning fa-pen-to-square px-2"></i></span>
            <span>Elimina un Progetto: <i class="fa-solid text-danger fa-trash-can"></i></span>

        </div>
    </div>
@endsection
