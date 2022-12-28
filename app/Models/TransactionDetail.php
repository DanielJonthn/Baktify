<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function product(){
        return $this->belongsToMany(Product::class, 'transactions');
        // return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
