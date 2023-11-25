<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer_id',
        'property_id'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class,'property_id');
    }
}
