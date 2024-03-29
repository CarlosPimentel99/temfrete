<?php
if (PHP_SAPI != 'cli') {
    exit('Rodar via CLI');
}

require __DIR__ . '/vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/src/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/src/dependencies.php';

$db = $container->get('db');

 $schema = $db->schema();
 $tabela = 'produtos';

 $schema->dropIfExists($tabela);

 $schema->create($tabela, function($table){

    $table->increments('id');
    $table->string('titulo', 100);
    $table->text('descricao');
    $table->decimal('preco', 11, 2);
    $table->string('fabricante', 60);
    $table->timestamps();
    
 });

 $db->table($tabela)->insert([
    'titulo' => 'Smartphone Motorola Moto G6 32GB Dual Chip',
    'descricao' => 'Android Oreo - 8.0 Tela 5.7" Octa-Core
        1.8 Ghz 4G Câmera 12 + 5MP (Dual Traseira) - Indigo',
    'preco' => 899.00,
    'fabricante' => 'Motorola',
    'created_at' => '2019-01-10',
    'updated_at' => '2019-01-10' 
 ]);

 $db->table($tabela)->insert([
    'titulo' => 'Iphone X Cinza Espacial 64GB',
    'descricao' => 'Tela 5.8" IOS 12 4GB Wi-fi Câmera 12MP - Apple',
    'preco' => 4999.00,
    'fabricante' => 'Apple',
    'created_at' => '2020-01-10',
    'updated_at' => '2020-01-10'  
 ]);
