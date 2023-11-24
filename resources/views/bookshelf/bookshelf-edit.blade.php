@extends('layouts.app')

@section('title')
    Update Bookshelf | Library Admin
@endsection

@section('content')
    <h3>Update Bookshelf</h3>

    <div class="form-login">
        <form action="{{ route('updateBookshelf',$bookshelf->id) }}" method="POST">
            @csrf
            <label for="Book">Book</label>
            <input class="input" type="text" name="book" id="book" value="{{ $bookshelf->book_name }}" placeholder="Book" />
            @error('book')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Book Category">Books Category</label>
            <input class="input" type="text" name="category" id="book-category" value="{{ $bookshelf->bookshelf_category }}" placeholder="Books Category" />
            @error('category')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Bookshelf Number">Bookshelf Number</label>
            <input class="input" type="number" name="number" id="bookshelf-number" value="{{ $bookshelf->bookshelf_number }}" placeholder="Bookshelf Number" />
            @error('number')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Location">Location</label>
            <select class="input" name="location" id="location">
                <option value="Coridor 1 floor 1" @if ($bookshelf->Location == 'Coridor 1 floor 1')
                    selected
                @endif >Coridor 1 floor 1</option>
                <option value="Coridor 2 floor 1"  @if ($bookshelf->Location == 'Coridor 2 floor 1')
                    selected
                @endif>Coridor 2 floor 1</option>
                <option value="Coridor 1 floor 2" @if ($bookshelf->Location == 'Coridor 1 floor 2')
                    selected
                @endif>Coridor 1 floor 2</option>
                <option value="Coridor 2 floor 2" @if ($bookshelf->Location == 'Coridor 2 floor 2')
                    selected
                @endif>Coridor 2 floor 2</option>
            </select>
            @error('location')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="simpan">
                Save
            </button>
        </form>
    </div>
@endsection
