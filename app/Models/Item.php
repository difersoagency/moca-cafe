<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'item';

    public function Jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }

    public function Kategori()
    {
        return $this->belongsToMany(Kategori::class, 'item_kategori');
    }
}
