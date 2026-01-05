<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerContent extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'image',
        'order',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($partner) {
            if (is_null($partner->order)) {
                $partner->order = static::max('order') + 1 ?? 0;
            }
        });
    }
}