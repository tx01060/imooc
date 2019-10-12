<?php
namespace core\lib;

class model extends \PDO
{
    public function __construct($dsn, $username, $passwd, $options)
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        try{
            parent::__construct($dsn, $username, $passwd);
        }catch(\PDOException $e){
            p($e->getMessage());
        }
    }
}
