<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function items()
{
    return $this->hasMany(Item::class);
}
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
}
