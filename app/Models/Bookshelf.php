<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshelf extends Model
{
    use HasFactory;
    protected $table = 'bookshelves';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'book_name', 
        'bookshelf_category', 
        'bookshelf_number',
        'Location',
    ];
    public $timestamps = false;
}
