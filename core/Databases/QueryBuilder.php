<?php

class QueryBuilder extends Connection
{
    private static $dbh;
    protected static $stmt,$res,$sql,$query;

    public function __construct($conf)
    {
        self::$dbh = $this->make($conf);
    }

    public function get()
    {
        return self::$stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getOne()
    {
        return self::$stmt->fetch(PDO::FETCH_OBJ);
    }

    // Custom Query
    public function query($sql)
    {
        self::$stmt = self::$dbh->prepare($sql);
        self::$stmt->execute();
        return $this;
    }

    // Select All Query
    public function selectAll($table)
    {
        self::$stmt = self::$dbh->prepare("SELECT * FROM $table");
        self::$stmt->execute();
        return $this;
    }

    // Insert Query
    public function insert($data, $table)
    {
        $dataKeys = array_keys($data);
        $dataValues = array_values($data);
        $cols = implode(",",$dataKeys);
        $q = "";
        foreach($dataKeys as $key) {
            $q .= "?,";
        }
        $values = trim($q, ",");
        self::$sql = "INSERT INTO $table ($cols) VALUES ($values)";
        self::$stmt = self::$dbh->prepare(self::$sql);
        self::$stmt->execute($dataValues);
    }

    // Update Query
    public function update($data, $id, $table)
    {
        $dataKeys = array_keys($data);
        $dataValues = array_values($data);
        $colsValues = "";
        foreach($data as $k=>$v) {
            $colsValues .= "$k=?,";
        }
        $colsValues = trim($colsValues, ",");
        // UPDATE test SET name=?,age=? WHERE id = $id
        self::$sql = "UPDATE $table SET $colsValues WHERE id=$id";
        self::$stmt = self::$dbh->prepare(self::$sql);
        self::$stmt->execute($dataValues);
    }

    // Delete Query
    public function delete($id, $table)
    {
        self::$sql = "DELETE FROM $table WHERE id=$id";
        self::$stmt = self::$dbh->prepare(self::$sql);
        self::$stmt->execute();
    }

}
