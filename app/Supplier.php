<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    //memberi nama tabel
    protected $table ='supplier';

    public $timestamps = false;
    protected $fillable = [
    'supplier_id',
    'supplier_name',
    'supplier_address'
];
}
