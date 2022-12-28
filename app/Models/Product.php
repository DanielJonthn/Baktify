<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['image','description','price','stock'];
    public $timestamps = false;
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function transactionDetail(){
        return $this->belongsToMany(TransactionDetail::class, 'transactions');
        // return $this->belongsToMany(TransactionDetail::class)-withPivot('quantity');
    }
}
