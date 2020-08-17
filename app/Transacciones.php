<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    public $timestamps = false;
    protected $table = 'transacciones';
    protected $primaryKey = 'id';
}
