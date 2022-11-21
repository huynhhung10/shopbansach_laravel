<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    public $timestamps = true; //set time to false
    protected $fillable = [
        'customer_id', 'customer_avatar', 'customer_name', 'customer_username', 'email', 'password', 'customer_phone', 'status'
    ];
    protected $primaryKey = 'customer_id';
    protected $table = 'tbl_customer';
}
