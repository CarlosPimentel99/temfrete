<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\TbFrete;

$app->group('/api/v1', function(){

	$this->get('/fretes/lista', function($request, $response){

		$fretes = TbFrete::where('status', 1)->get();
		return $response->withJson($fretes);

	});

	$this->get('/fretes/lista/a', function($request, $response, $args){
 
		$frete = TbFrete::findOrFail();
		return $response->withJson($frete);

	});

	/*$this->post('/produtos/adiciona', function($request, $response){

		$dados = $request->getParsedBody();


		$produto = Produto::create($dados);
		return $response->withJson($produto);

	});

	$this->get('/produtos/lista/{id}', function($request, $response, $args){

		$produto = Produto::findOrFail($args['id']);
		return $response->withJson($produto);

	});

	$this->put('/produtos/atualiza/{id}', function($request, $response, $args){

		$dados = $request->getParsedBody();
		$produto = Produto::findOrFail($args['id']);
		$produto->update($dados);
		return $response->withJson($produto);

	});

	$this->get('/produtos/remove/{id}', function($request, $response, $args){

		$produto = Produto::findOrFail($args['id']);
		$produto->delete();
		return $response->withJson($produto);

	});*/

}); 