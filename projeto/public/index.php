<?php
//Carregar as configurações do banco de dados
$config = require_once __DIR__ . '/../config/config.php';

//Inicializar conexão com o banco de dados
require_once __DIR__ . '/../app/models/Database.php';
$db = (new Database($config))->getConnection()

//Inicializar o controlador e gerar o PDF
require_once __DIR__ . '/../app/controllers/ProdutoController.php';
$controller = new ProdutoController($db);
$controller->gerarRelatorioPDF();