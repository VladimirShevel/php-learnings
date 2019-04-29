<?php

namespace App\Core\Database;
use PDO;

class QueryBuilder

{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectColumn($table, $returnedColumn){
        $statement = $this->pdo->prepare("SELECT DISTINCT {$returnedColumn} FROM {$table} ORDER by {$returnedColumn}");

        $statement->execute();

        return $statement->fetchall(PDO::FETCH_COLUMN);
    }

    public function deleteProduct($id)
    {
        $statement = $this->pdo->prepare("delete from product where productid = {$id}");
        $statement ->execute();
    }

    public function deleteProductAttribute($string)
    {

        $statement = $this->pdo->prepare($string);
        $statement ->execute();
    }



    public function clearAttributes($productID){
        $statement = $this->pdo->prepare("delete from product_attribute where productid = {$productID}");

        $statement->execute();

       }


    public function selectColumnByColumnValue( $returnedColumn, $table, $column, $data)
    {
        $statement = $this->pdo->prepare("SELECT {$returnedColumn} FROM {$table} WHERE {$column} = '{$data}' ORDER by {$returnedColumn}");

        $statement->execute();

        return $statement->fetchall(PDO::FETCH_COLUMN);
    }

    public  function selectAttributes($productid, $class)
    {
        $statement = $this->pdo->prepare(

        "SELECT a.code, a.attribName, a.attributeValue FROM product p
          left join product_attribute t
          on p.productid = t.productid
          left JOIN attribute a
          on t.attributeid = a.code 
          WHERE p.productid = '{$productid}'"

        );
           $statement->execute();

        return $statement->fetchall(PDO::FETCH_CLASS, $class);


    }


    public function selectAllWhere($table, $column, $id, $class)

    {

        $statement = $this->pdo->prepare("select * from {$table} where {$column} = {$id}");

        $statement->execute();

        return $statement->fetchall(PDO::FETCH_CLASS, $class);

    }


    public function selectAllLimit($table, $offset, $limit,$class)

    {

        $statement = $this->pdo->prepare("select * from {$table} LIMIT {$offset}, {$limit}");

        $statement->execute();

        return $statement->fetchall(PDO::FETCH_CLASS, $class);

    }

    public function selectToClassBySQL($string, $class)
    {
        $statement = $this->pdo->prepare($string);
        $statement->execute();
        return $statement->fetchall(PDO::FETCH_CLASS,$class);
    }

    public function selectAll($table, $class)
    {

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchall(PDO::FETCH_CLASS,$class);

    }

    public function update($sql)
    {
        try {

            $statement = $this->pdo->prepare($sql);
            $statement->execute();
        }

        catch (Exception $e) {
            error_log($e);
            echo 'Запис до бази даних додано не було ((';

        }

    }



    public function insert($table, $parameters)
    {
        $sql = sprintf(

            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);
            //var_dump($statement); die();
            $statement->execute($parameters);

            //echo '<h2>Ваш запис додано</h2>';

        } catch (Exception $e) {
            error_log($e);
            echo 'Запис до бази даних додано не було ((';

        }

    }

}