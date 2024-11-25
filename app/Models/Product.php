<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //jadi model itu digunakan untuk menghubungkan tabel dengan database
    //serta untuk memanipulasi data di tabel tersebut
    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];
}
