<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    
    protected $table = 'animales';

    protected $fillable = [
        'category_id',
        'name',
        'scientificName',
        'conservationStatus',
        'habitat',
        'imageUrl'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
