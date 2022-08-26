<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = 'products';
    // ? fillable artinya colomn di table yang boleh diisi
    protected $fillable = ['name', 'description', 'price'];
}
