@extends('layouts.base')

@section('documentTitle')
    Modify {{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Modify {{ $comic->title }}</h2>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('comics.update', ['id' => $comic->id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="number" class="form-control" id="isbn" placeholder="Inserisci un ISBN di 13 cifre" name="isbn" value="{{ $comic->isbn }}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Comic-#</label>
                    <input type="number" class="form-control" id="number" name="number" value="{{ $comic->number }}">
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author" value="{{ $comic->author }}">
                </div>
                <div class="mb-3">
                    <label for="format" class="form-label">Format</label>
                    <select class="form-select" id="format" name="format">
                        <option value="softcover">Softcover</option>
                        <option value="hardcover">Hardcover</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $comic->publisher }}">
                </div>
                <div class="mb-3">
                    <label for="edition" class="form-label">Edition</label>
                    <input type="text" class="form-control" id="edition" name="edition" value="{{ $comic->edition }}">
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label">Language</label>
                    <input type="text" class="form-control" id="language" name="language" value="{{ $comic->language }}">
                </div>
                <div class="mb-3">
                    <label for="pages" class="form-label">Pages</label>
                    <input type="number" class="form-control" id="pages" name="pages" value="{{ $comic->pages }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" min="0.01" step="0.01" placeholder="Inserisci un numero con due decimali" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                </div>

                <button type="submit" class="btn btn-primary">Save mods in DB</button>
            </form>
        </div>
    </div>
@endsection