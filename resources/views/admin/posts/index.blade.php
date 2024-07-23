@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-4">

            {{-- Intestazione --}}
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <h1>Posts list</h1>
                <a  as='button' class="btn btn-primary" href="{{ route('admin.posts.create') }}">Create new post</a>
            </div>
            {{-- FINE Intestazione --}}

            {{-- Messaggio di conferma creazione nuovo post --}}
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            {{-- FINE Messaggio di conferma creazione nuovo post --}}

            {{-- Tabella --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="col">#</th>
                    <th scope="col" class="col-7">TITLE</th>
                    <th scope="col" class="col-3">SLUG</th>
                    <th scope="col" class="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.posts.show', $post) }}" as='button' class="btn btn-info mx-1"><i class="fas fa-magnifying-glass"></i></a>
                                <a href="{{ route('admin.posts.edit', $post) }}" as='button' class="btn btn-warning ms-1 me-2"><i class="fas fa-pencil"></i></a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-trash-can"></i></button>

                                {{-- Modale --}}
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete confirmation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Clicking "Delete" will delete the post. Are you sure?</p>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Go back</button>
                                                <form action="{{ route('admin.posts.show', $post) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>

                                                {{-- TODO: Cancella correttamente i record tranne quelli creati da me --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- FINE Modale --}}
                                     
                            </div>
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
              </table>
              {{-- FINE Tabella --}}

        </div>
    </div>
</div>
    


@endsection