<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dModelContent extends Model
{
    use HasFactory;

    protected $table = '3d_model_contents';
    protected $fillable = ['title', 'client', 'date', 'image', 'description'];

    protected $casts = [
        'date' => 'date',
    ];

    public $timestamps = true;
}
