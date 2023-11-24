@extends('layouts.app')

@section('title')
    Bookshelf | Library Admin
@endsection

@section('content')
    <h3>Bookshelf</h3>
    <button type="button" class="btn btn-tambah">
        <a href="{{ route('createBookshelf') }}" type="button" class="btn btn-tambah">
            Create Data
        </a>
    </button>
    <button type="button" class="btn">
        <a href="{{ route('printBookshelf') }}">Cetak</a>
    </button>
    <table>
        <thead>
            <tr>
                <th width=8.02%>ID Book</th>
                <th width=28.8%>Book</th>
                <th width=19.4%>Bookshelf Category</th>
                <th width=9.55%>Bookshelf Number</th>
                <th width=19.55%>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        @php
            $no = 1;
        @endphp
        @forelse ($bookshelf as $show)
            <td>{{ $no++ }}</td>
            <td>{{ $show->book_name }}</td>
            <td>{{ $show->bookshelf_category }}</td>
            <td>{{ $show->bookshelf_number }}</td>
            <td>{{ $show->Location }}</td>
            <td>
                <a href="{{ route('editBookshelf', ['id' => $show->id]) }}">Edit</a> ||
                <a href="{{ route('deleteBookshelf', ['id' => $show->id]) }}">Delete</a>
            </td>
        @empty
            <tr>
                <td colspan="6" align="center">Tidak ada data</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
