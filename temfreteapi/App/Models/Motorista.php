<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Motorista extends Model{

	protected $fillable = [
		'nome', 'telefone', 'cpf','senha','placa', 'created_at', 'updated_at', 'tipoMotorista'
	];

}
