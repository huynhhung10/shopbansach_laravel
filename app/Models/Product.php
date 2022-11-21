<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'brand_id',
        'category_id',
        'product_name',
        'product_content',
        'product_price',
        'product_author',
        'product_img',
        'product_quantity',
        'product_featured',
        'status',

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
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'brand_id');
    }
}
