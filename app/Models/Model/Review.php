<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['customer', 'star', 'review', 'product_id'];

    public function product()
    {
        return $this->belongsTo('App\Models\Model\Product');
    }
}
