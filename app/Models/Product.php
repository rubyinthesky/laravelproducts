<?php

namespace App\Models;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'reference', 'price'];
    
    public function variations(){
        return $this->hasMany(Variation::class);
    }
}
