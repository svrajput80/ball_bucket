<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boxe extends Model
{
    use HasFactory;

    protected $table = 'boxes';

    public $timestamps = false;

    protected $fillable = ['box', 'volume'];
}
