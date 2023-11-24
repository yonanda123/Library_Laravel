<?php

namespace App\Http\Controllers;

use App\Models\Bookshelf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BookshelfController extends Controller
{
    public function index (){
        $bookshelf = Bookshelf::all();
        return view('bookshelf\bookshelf', compact('bookshelf'));
    }
    public function create(){
        return view('bookshelf\bookshelf-entry');
    }
    public function store (Request $request){
        $this->validate($request, [
            'book' => 'required',
            'category' => 'required',
            'number' => 'required',
            'location' => 'required',
        ]);
        Bookshelf::create([
            'book_name' => $request->book,
            'bookshelf_category' => $request->category,
            'bookshelf_number' => $request->number,
            'Location' => $request->location,
        ]);
        return redirect()->route('bookshelf');
    }
    public function edit ($id){
        $bookshelf = Bookshelf::find($id);
        return view('bookshelf\bookshelf-edit', compact('bookshelf'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'book' => 'required',
            'category' => 'required',
            'number' => 'required',
            'location' => 'required',
        ]);
        $bookshelf = Bookshelf::find($id);
        $bookshelf->update([
            'book_name' => $request->book,
            'bookshelf_category' => $request->category,
            'bookshelf_number' => $request->number,
            'Location' => $request->location,
        ]);
        return redirect()->route('bookshelf');
    }
    public function delete($id){
        $bookshelf = Bookshelf::find($id);
        return view('bookshelf\bookshelf-delete', compact('bookshelf'));
    }
    public function destroy($id){
        $bookshelf = Bookshelf::find($id);
        $bookshelf->delete();
        return redirect()->route('bookshelf');
    }
    public function print()
    {
        $bookshelf = Bookshelf::all();
        $pdf = Pdf::loadview('bookshelf.bookshelf-cetak', compact('bookshelf'));
        return $pdf->download('laporan-bookshelf.pdf');
    }
}
