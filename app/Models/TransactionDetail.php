<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table = "transaction_detail";
    public $timestamps = false;
    protected $casts = [
        'date' => 'datetime',
    ];
    public function product(){
        // return $this->belongsToMany(Product::class);
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
