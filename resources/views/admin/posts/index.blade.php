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
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>title</td>
                    <td>buttons</td>
                  </tr>
                </tbody>
              </table>
              {{-- FINE Tabella --}}

        </div>
    </div>
</div>
    


@endsection