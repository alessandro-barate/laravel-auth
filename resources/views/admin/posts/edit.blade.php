@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-4">

            {{-- Intestazione --}}
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <h1>Update your post</h1>
            </div>
            {{-- FINE Intestazione --}}

            {{-- Gestione errori --}}
            @include('shared.errors')
            {{-- FINE Gestione errori --}}

            {{-- Form --}}
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="post-title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="post-title" name="title">
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" rows="6" name="content"></textarea>
                    <label for="floatingTextarea">Content</label>
                </div>
                <button type="submit" class="btn btn-primary">Create post</button>
            </form>
            {{-- FINE Form --}}

            <hr>

            {{-- Bottone all'index --}}
            <div class="mt-5">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Back to the posts list</a>
            </div>
            {{-- FINE Bottone all'index --}}

        </div>
    </div>
</div>
@endsection