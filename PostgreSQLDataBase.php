<?php

/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 26/12/2016
 * Time: 22:53
 */
class PostgreSQLDataBase implements DataBase
{
    public function __construct()
    {
    }

    public function connect()
    {
        // TODO: Implement connect() method.
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
        // TODO: Implement close() method.
    }

    public function setTableName($name)
    {
        // TODO: Implement setTableName() method.
    }
}