<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Motorista;
use \Firebase\JWT\JWT;

$app->group('/api/v1', function(){

	$this->get('/motoristas/lista', function($request, $response){

		$motorista = Motorista::get();
		return $response->withJson($motorista);

	});

	$this->post('/motoristas/adiciona', function($request, $response){	

		$dados = $request->getParsedBody();
		

		$cpf = $dados['cpf'] ?? null;
		$senha = $dados['senha'] ?? null;

		$motorista = Motorista::where('cpf', $cpf)->first();

		if(!is_null($motorista)){

			return $response->withJson([
				'status' => 'já cadastrado'
			]);

		}else {
			$motorista = Motorista::create($dados);
			
			return $response->withJson([
				'status' => 'sucesso'
			]);
		}

	});

	$this->post('/motoristas/validalogin', function($request, $response){

		$dados = $request->getParsedBody();

		$cpf = $dados['cpf'] ?? null;
		$senha = $dados['senha'] ?? null;

		$motorista = Motorista::where('cpf', $cpf)->first();

		if( !is_null($motorista) && ($senha) === $motorista->senha ){

			$secretkey = '2c5b9b2a934d73df29517a7940ee243aefca5c63';
			$chaveAcesso = JWT::encode($motorista, $secretkey);

			return $response->withJson([
				'status' => 'ok',
				'token'  => $chaveAcesso
			]);
		}
		
		return $response->withJson([
			'status' => 'erro'
		]);
	});
}); 