<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BookController extends Controller
{
    public function index (){
        $book = Book::all();
        return view('book\book', compact('book'));
    }
    public function create(){
        return view('book\book-entry');
    }
    public function store (Request $request){
        $this->validate($request, [
            'book_title' => 'required',
            'book_author' => 'required',
            'book_publisher' => 'required',
            'publication_year' => 'required',
        ]);
        Book::create([
            'book_title' => $request->book_title,
            'book_author' => $request->book_author,
            'book_publisher' => $request->book_publisher,
            'publication_year' => $request->publication_year,
        ]);
        return redirect()->route('book');
    }
    public function edit ($id){
        $book = Book::find($id);
        return view('book\book-edit', compact('book'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'book_title' => 'required',
            'book_author' => 'required',
            'book_publisher' => 'required',
            'publication_year' => 'required',
        ]);
        $book = Book::find($id);
        $book->update([
            'book_title' => $request->book_title,
            'book_author' => $request->book_author,
            'book_publisher' => $request->book_publisher,
            'publication_year' => $request->publication_year,
        ]);
        return redirect()->route('book');
    }
    public function delete($id){
        $book = Book::find($id);
        return view('book\book-delete', compact('book'));
    }
    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book');
    }
    public function print()
    {
        $book = Book::all();
        $pdf = Pdf::loadview('book.book-cetak', compact('book'));
        return $pdf->download('laporan-book.pdf');
    }
}
