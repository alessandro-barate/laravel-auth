@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mt-4">

            {{-- Intestazione --}}
            <div class="d-flex justify-content-between mb-3 align-items-center">
                <h1>Posts list</h1>
                <button class="btn btn-secondary">Create new post</button>
            </div>
            {{-- FINE Intestazione --}}

            {{-- Tabella --}}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="col-2">#</th>
                    <th scope="col" class="col-8">Title</th>
                    <th scope="col" class="col-2"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>buttons</td>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
              {{-- FINE Tabella --}}

        </div>
    </div>
</div>
    


@endsection