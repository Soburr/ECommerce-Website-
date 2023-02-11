<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'user_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function product () {
        return $this->hasMany(Product::class);
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function setCartIdAttribute() {
        if (! $this->cart_id) {
            $this->attributes['cart_id'] = (string) Str::uuid();
        }
     }

     public function cartItems () {
        return $this->hasMany(CartItem::class, 'cart_id', 'cart_id');
    }

    }
