<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';

    public function Item()
    {
        return $this->belongsToMany(Item::class, 'item_kategori');
    }
}
