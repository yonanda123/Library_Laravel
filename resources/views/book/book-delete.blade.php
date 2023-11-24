@extends('layouts.app')

@section('title')
    Delete Book | Library Admin
@endsection

@section('content')
    <h3>Delete Book</h3>
    <div class="form-login">
        <h4>Do You Want To Delete Thid Data ?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ route('destroyBook', $book->id) }}>
                Yes
            </a>
        </button>
        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="{{ route('book') }}">
                No
            </a>
        </button>
    </div>
@endsection
