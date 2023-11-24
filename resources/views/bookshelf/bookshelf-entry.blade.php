@extends('layouts.app')

@section('title')
    Input Bookshelf | Library Admin
@endsection

@section('content')
    <h3>Input Bookshelf</h3>

    <div class="form-login">
        <form action="{{ route('storeBookshelf') }}" method="POST">
            @csrf
            <label for="Book">Book</label>
            <input class="input" type="text" name="book" id="book" placeholder="Book" />
            @error('book')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Book Category">Books Category</label>
            <input class="input" type="text" name="category" id="book-category" placeholder="Books Category" />
            @error('category')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Bookshelf Number">Bookshelf Number</label>
            <input class="input" type="number" name="number" id="bookshelf-number" placeholder="Bookshelf Number" />
            @error('number')
                <p style="font-size: 10px; color: red">{{ $message }}</p>
            @enderror

            <label for="Location">Location</label>
            <select class="input" name="location" id="location">
                <option value="Coridor 1 floor 1">Coridor 1 floor 1</option>
                <option value="Coridor 2 floor 1">Coridor 2 floor 1</option>
                <option value="Coridor 1 floor 2">Coridor 1 floor 2</option>
                <option value="Coridor 2 floor 2">Coridor 2 floor 2</option>
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
