<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class TbUsuario extends Model{

	protected $fillable = [
		'titulo', 'descricao', 'preco','fabricante', 'updated_at', 'created_at'
	];

}
