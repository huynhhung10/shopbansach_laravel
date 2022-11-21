<?php 

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use App\Http\Controllers\CategoryController;

    class Category extends Model{
        use HasFactory;
        public $timestamps = true;
        protected $fillable = [
            'category_name',
            'status'
        ];
        protected $primaryKey = 'category_id';
        protected $table = 'tbl_category';

        public function product(){
            return $this->hasMany('App\Models\Product');
        }
    }
