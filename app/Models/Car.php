<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'name',
        'build_year',
        'color'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'cars';
}