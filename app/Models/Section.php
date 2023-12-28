<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'section_name',
        'description',
        'created_by'
    ] ;
    use HasFactory;
    public function products(){
        return $this->hasMany(Product::class,'section_id');
    }
}
