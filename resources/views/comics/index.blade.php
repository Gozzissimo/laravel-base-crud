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
    <div class="row">
        <div class="col">

            <table class="table table-light">
                <thead>
                    <tr class="text-center">
                        <th>Title</th>
                        <th>ISBN</th>
                        <th>Price</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->isbn }}</td>
                        <td>{{ $comic->price }}</td>
                        <td><a class="btn btn-info" href="{{ route('comics.show', $comic->id) }}">View</a></td>
                        <td><a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Cancella">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection