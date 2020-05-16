<?php

// Criando uma constante para acesso ao banco de dados através do PDO.

define('DSN', 'mysql:host=127.0.0.1; dbname=registro');
define('DATABASEUSER', 'root');
define('PASSWORD', '');

try {

    // Criando uma instância do PDO com as constantes criadas acima como parâmetros para a conexão
    // com o banco de dados.

    $conn = new PDO(DSN, DATABASEUSER, PASSWORD);
    echo "Conecatado com Sucesso";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_EXCEPTION);

} catch (PDOException $ex) {
    echo "Erro ao conectar: " . $ex->getMessage();
}
