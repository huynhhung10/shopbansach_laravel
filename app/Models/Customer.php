<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
        'customer_id', 'customer_avatar', 'customer_name', 'customer_username', 'email', 'password', 'customer_phone', 'status'
    ];
    protected $primaryKey = 'customer_id';
    protected $table = 'tbl_customer';
}
