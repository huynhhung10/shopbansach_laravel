<?php 

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model{
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
            'product_name'
        ];
        protected $primaryKey = 'product_id';
        protected $table = 'tbl_product';
    }
?>