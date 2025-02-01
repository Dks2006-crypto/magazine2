<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // Указываем всегда
    protected $fillable = ['name', 'image', 'brand_id', 'color', 'prise', 'weight',
'material'];
public function brands()
    {
        return $this->belongsTo(Brand::class);
    }
}

