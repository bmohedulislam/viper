<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;
    function relationshiptoproduct(){
        return $this->hasOne(product::class,'id','product_id');
    }
}
