@extends('layouts.app')

@section('content')
    <div class="container mt-5">

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
                    </tr>

                @empty <h4>Non ci sono progetti</h4>
                @endforelse
            </tbody>
        </table>
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
@endsection
