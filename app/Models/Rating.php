<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $guarded = [];

    public function destinasi()
    {
        return $this->belongsTo(destinasi::class);
    }
}
