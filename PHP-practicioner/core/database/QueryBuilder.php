<?php

class QueryBuilder 
{
    protected $pdo;
    
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function selectAll($table)
     {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_CLASS);
        return $results;
     }
}

//other way to do it
// public function selectAll($table, $class)
// {
//    $statement = $this->pdo->prepare("select * from {$table}");
//    $statement->execute();
//    $results = $statement->fetchAll(PDO::FETCH_CLASS, $class);
//    return $results;
// }