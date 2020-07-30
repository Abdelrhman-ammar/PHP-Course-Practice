<?php

class queryBuilder{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function makeQuery($query){
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
    public function selectQuery($tableName, $intoClass){
        $statement = $this->pdo->prepare("select * from $tableName");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    public function selectQueryArr($tableName){
        $statement = $this->pdo->prepare("select * from $tableName");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function insert($tableName, $parameters){
        $sqlQuery = sprintf(
          'insert into %s (%s) values (%s)',
            $tableName,
            implode(', ',array_keys($parameters)),
            '\''. implode('\', \'',$parameters) . '\''
        );
        try{
            $statement = $this->pdo->prepare($sqlQuery);
            $statement->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}