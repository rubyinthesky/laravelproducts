<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'reference', 'name'];
    public function products(){
        return $this->belongsTo(Product::class);
    }
}
