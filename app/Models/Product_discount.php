<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_discount extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','discount_percent','active'];
}
