<?php

namespace App\Models;

use Illumintate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //   
    use HasFactory;
    protected $table ='products';
    protected $fillable = ['category_id','name','image','description','news','price'];
}
