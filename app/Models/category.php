<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['name','slug','image'];
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
