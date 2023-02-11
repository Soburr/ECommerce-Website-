<?php

namespace App\Models;

use Darryldecode\Cart\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartitem extends Model
{
    use HasFactory;

    public function user () {
        return $this->belongsTo(User::class);
    }
}
