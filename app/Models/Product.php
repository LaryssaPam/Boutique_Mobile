<?php

namespace App\Models;

//use Illumintate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //   
   
    protected $table ='products';
    protected $fillable = ['category_id','name','image','description','news','price'];
    
    // Liaison éloquente belong stu de la catégorie du produit
    public function category(){
        return $this->belongsTo(Category::class); 
        
    }
   
}
