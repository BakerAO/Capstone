<?php

class QueryBuilder{
    protected $pdo;
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
    public function selectAll($table){
        try{
            $statement = $this->pdo->prepare("select * from {$table}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(\PDOException $e){
            die($e->getMessage());
        }
    }
    public function insert($table, $parameters){
        $sql = sprintf('insert into %s (%s) values (%s)', 
            $table, implode(', ', array_keys($parameters)), 
            ':'.implode(', :', array_keys($parameters))
        );
        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        }catch(\PDOException $e){
            die($e->getMessage());
        }
    }
    public function selectFrame($table, int $frameID){
        try{
            $statement = $this->pdo->prepare("select * from {$table} where frame_id={$frameID}");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }catch(\PDOException $e){
            die($e->getMessage());
        }
    }
}