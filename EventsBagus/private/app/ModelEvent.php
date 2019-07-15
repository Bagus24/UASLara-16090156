<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ModelEvent extends Model
{
    protected $table = 'event';

    protected $fillable = ['nama','kategori','foto','tanggal', 'isi'];

    use SoftDeletes;
    protected $dates =['deleted_at'];

    
}
