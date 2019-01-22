<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    //memberi nama tabel
    protected $table ='customer';
    

    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    protected $fillable = [
    'customer_id',
    'name',
    'address'
];
}
