@extends('layouts.app')

@section('title')
    Update Book | Library Admin
@endsection

@section('content')
    <h3>Update Book</h3>

    <div class="form-login">
        <form action="{{ route('updateBook', ['id' => $book->id]) }}" method="POST">
            @csrf
            <label for="Book Title">Book Title</label>
            <input class="input" type="text" name="book_title" id="book_title" value="{{ $book->book_title }}" placeholder="Book Title" />
            @error('book_title')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Book Author">Book Author</label>
            <input class="input" type="text" name="book_author" id="book_author" value="{{ $book->book_author }}" placeholder="Book Author" />
            @error('book_author')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Book Publisher">Book Publisher</label>
            <input class="input" type="text" name="book_publisher" id="book_publisher" value="{{ $book->book_publisher }}" placeholder="Book Publisher" />
            @error('book_publisher')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Publication Year">Publication Year</label>
            <input class="input" type="number" name="publication_year" id="publication_year" value="{{ $book->publication_year }}" placeholder="Publication Year" />
            @error('publication_year')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="simpan">
                Save
            </button>
        </form>
    </div>
@endsection
