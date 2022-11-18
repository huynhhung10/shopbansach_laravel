<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_content',
        'product_price',
        'product_author',
        'product_img',
        'product_quantity',
        'status',
        'product_name',
        'category_id',
        'brand_id',
    ];
    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product';

    public function category()
    {
        //category_id thứ nhất là khóa ngoại của Product, cái thứ là khóa chính của Category
        return $this->belongsTo('App\Models\Category', 'category_id', 'category_id');
    }

    public function brand()
    {
        //category_id thứ nhất là khóa ngoại của Product, cái thứ là khóa chính của Category
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'brand_id');
    }
}
