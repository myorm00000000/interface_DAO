<?php

/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 26/12/2016
 * Time: 22:17
 */
interface DataBase
{
    public function connect();

    public function insert($data);

    public function update($data, $where);

    public function select($columns='*', array $filters = null);

    public function delete($where);

    public function close();

    public function setTableName($name);
}