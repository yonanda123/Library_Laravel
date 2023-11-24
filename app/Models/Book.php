<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'book_title', 
        'book_author', 
        'book_publisher', 
        'publication_year',
    ];
    public $timestamps = false;
}
