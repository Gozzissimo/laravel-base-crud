@extends('layouts.base')

@section('documentTitle')
{{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add new Comicbook</a>
        </div>
    </div>
</div>
@endsection