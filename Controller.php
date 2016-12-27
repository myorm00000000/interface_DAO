<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 26/12/2016
 * Time: 23:29
 */

require_once "DataBase.php";
require_once "MySQLDataBase.php";
require_once "DataAccesObject.php";

//Instancia classe que abstrairá as ações do MySQL
$database = new MySQLDataBase($host, $user, $passwd, $dbname);

//Instancio a classe que fará as operações, dizendo que banco de dados irei utilizar
$dao = new DataAccesObject($database);

//Definir o nome da tabela
$dao->setTableName('produtos');

//faço uma operação
$dao->delete('idProduto = 1');