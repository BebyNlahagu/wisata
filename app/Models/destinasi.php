<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinasi extends Model
{
    use HasFactory;

    protected $table = 'destinasis';
    protected $guarded = [];

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
