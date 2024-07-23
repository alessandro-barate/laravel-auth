@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col mt-4">

            {{-- Intestazione --}}
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <h1>{{ $post->title }}</h1>
                <button class="btn btn-secondary">Create new post</button>
            </div>
            {{-- FINE Intestazione --}}

                <p>{{ $post->content }}</p>
        </div>
    </div>
</div>
    


@endsection