<?php

namespace App\Db;

use \PDO;

class Database
{
    const HOST = "crud";
    const NAME = "crud";
    const USER = "root";
    const PASS = "";


    private $table;

    /** connection to db
     * @var PDO
     */
    private $connection;

    public function __construct($table = null)
    {
        $this->table=$table;
        $this->setConnection();
    }

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->$getMessage()); //never use in production, save the log and show friendly message to user
        }
    }


}