<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    
	use SoftDeletes;

    protected $table = 'empresas';

    protected $dates = ['deleted_at'];

    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido')->withDefault();
    }
}
