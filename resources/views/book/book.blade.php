@extends('layouts.app')

@section('title')
    Book | Library Admin
@endsection

@section('content')
    <h3>Book</h3>
    <button type="button" class="btn btn-tambah">
        <a href="{{ route('createBook') }}" type="button" class="btn btn-tambah">
            Create Data
        </a>
    </button>
    <button type="button" class="btn">
        <a href="{{ route('printBook') }}">Cetak</a>
    </button>
    <table>
        <thead>
            <tr>
                <th width=8.02%>ID Book</th>
                <th width=28.8%>Book Title</th>
                <th width=19.4%>Book Author</th>
                <th width=9.55%>Book Publisher</th>
                <th width=19.55%>Publication Year</th>
                <th>Action</th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp
        @forelse ($book as $show)
            <td>{{ $no++ }}</td>
            <td>{{ $show->book_title }}</td>
            <td>{{ $show->book_author }}</td>
            <td>{{ $show->book_publisher }}</td>
            <td>{{ $show->publication_year }}</td>
            <td>
                <a href="{{ route('editBook', ['id' => $show->id]) }}">Edit</a> ||
                <a href="{{ route('deleteBook', ['id' => $show->id]) }}">Delete</a>
            </td>
        @empty
            <tr>
                <td colspan="6" align="center">Tidak ada data</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
