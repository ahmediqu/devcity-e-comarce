<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded  = [];

    public function customer(){
    	return $this->belongsTo(Users::class);
    }

    public function precessor(){
    	return $this->hasOne(User::class,'processed_by');
    }

    public function products(){
    	return $this->hasMany(Product::class);
    }
}
