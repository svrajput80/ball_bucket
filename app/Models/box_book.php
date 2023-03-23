<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class box_book extends Model
{
    use HasFactory;
    
    protected $table = 'box_books';

    public $timestamps = false;

    protected $fillable = ['box_id', 'book_id', 'qty'];
}
