<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraphicContent extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'client', 'date', 'image', 'description'];

    protected $casts = [
        'date' => 'date',
    ];

    public $timestamps = true;
}
