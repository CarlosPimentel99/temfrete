<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class TbFrete extends Model{

	protected $fillable = [
		'titulo', 'tp_caminhao', 'peso_carga','local_coleta',
		'local_entrega', 'valor', 'status', 'updated_at', 'created_at'
	];

}
