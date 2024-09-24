<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
    ];

    // Attributes that should be hidden for arrays
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Attributes that should be cast to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
