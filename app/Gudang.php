<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'gudang';
    protected $guarded = ['updated_at','created_at'];
}
