<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = ['title', 'client', 'date', 'image'];

    protected $casts = [
        'date' => 'date', // Cast 'date' to a Carbon instance
    ];

    // Optionally, if you have timestamps (created_at, updated_at), you can manage them here
    public $timestamps = true;
}
