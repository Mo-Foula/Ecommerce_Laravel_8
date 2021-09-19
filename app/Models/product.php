<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table="products";

    //  public function order()
    //  { 
    //    return $this->belongsTo(Order::class);
    //  }
}
