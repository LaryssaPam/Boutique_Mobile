<?php

namespace App\Models;

use Illumintate\Database\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 
    /*use HasFactory;
    protected $table ='categories';
    protected $fillable = ['name'];*/
   
    /**
     * Get all of the comments for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'foreign_key', 'local_key');
    }

     
}
