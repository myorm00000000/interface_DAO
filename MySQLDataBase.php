<?php

/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 26/12/2016
 * Time: 22:32
 */
class MySQLDataBase implements DataBase
{
    public function __construct($host, $user, $passwd, $dbname)
    {
    }

    public function connect()
    {

    }

    public function insert($data)
    {
        // TODO: Implement insert() method.
    }

    public function update($data, $where)
    {
        // TODO: Implement update() method.
    }

    public function select($columns = '*', array $filters = null)
    {
        // TODO: Implement select() method.
    }

    public function delete($where)
    {
        // TODO: Implement delete() method.
    }

    public function close()
    {

    }

    public function setTableName($name)
    {
        // TODO: Implement setTableName() method.
    }
}