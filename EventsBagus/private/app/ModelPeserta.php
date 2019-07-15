<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelPeserta extends Model
{
    protected $table = 'peserta';

     //protected $fillable = ['id_event','nama','email','no_hp','alamat'];

    use SoftDeletes;
    protected $dates =['deleted_at'];
}
