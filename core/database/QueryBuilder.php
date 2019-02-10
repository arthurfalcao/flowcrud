<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters) {
        
        $columns = implode(', ', array_keys($parameters));
        $values = ':' . implode(', :', array_keys($parameters));

        $query = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table, 
            $columns, 
            $values
        );

        try {

            $statement = $this->pdo->prepare($query);
            
            $statement->execute($parameters);
        } catch (Exception $e) {
            
            die('Whoops, something went wrong.');
        }
    }
}