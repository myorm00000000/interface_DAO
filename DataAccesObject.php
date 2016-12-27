<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 26/12/2016
 * Time: 23:19
 */
class DataAccesObject implements DataBase
{
    protected $adapter;

    function __construct(DataBase $object)
    {
        $this->adapter = $object;
        $this->connect();
    }

    public function setTableName($name)
    {
        // TODO: Implement setTableName() method.
        $this->adapter->setTableName($name);
    }

    public function connect()
    {
        // TODO: Implement connect() method.
        $this->adapter->connect();
    }

    public function insert($data)
    {
        // TODO: Implement insert() method.
        $this->adapter->insert($data);
    }

    public function update($data, $where)
    {
        // TODO: Implement update() method.
        $this->adapter->update($data, $where);
    }

    public function delete($where)
    {
        // TODO: Implement delete() method.
        $this->adapter->delete($where);
    }

    public function close()
    {
        // TODO: Implement close() method.
        $this->adapter->close();
    }
}