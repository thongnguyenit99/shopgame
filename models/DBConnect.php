<?php
// bao nhiu class thì bao nhiu file, tên class trùng vs file
    // thông nguyễn smartosc
class DBConnect
{
    private const dbName = 'shopgame';
    //private $dsn='mysql:dbname=shopgame;host=127.0.0.1';
    private $dsn = 'mysql:dbname=' . dbconnect::dbName . '; host=127.0.0.1';
    private $user = 'root';
    private $pass = '';
    private $option = [];
    private $connect = null;
     private $stmt = null;

    function __construct()
    {
        try {
            $this->connect = new PDO($this->dsn, $this->user, $this->pass, $this->option);
            $this->connect->exec('set names utf8 ');
            //echo 'Success';
        } catch (PDOException $e) {
            echo $e->getMessage();
            die(' Conncet fail');
        }
    }

    /*
    * use for insert|| update|| select|| delete
    * @param string $sql
    * @param array $values=[]
    *return bool
    */

    function executeQuery(string $sql, array $values = [])
    {
        // khai báo 1 biến mà biến kia trỏ tới prepare
        $this->stmt = $this->connect->prepare($sql);

        // cho mảng chạy từ 1 bởi vì  param chạy từ 1
        for ($i = 1; $i <= count($values); $i++) {
            $this->stmt->bindValue($i, $values[$i - 1]);   // $values[$i-1] lấy ra phần tử thứ 0 . bởi vì mảng bắt đầu từ 0 mà

        }
        return $this->stmt->execute();
    }
    /** use for select return only 1 row
     *  @param string $sql
     * @param array $values=[]
     * @param object (row)
     */
    function getOneRow($sql, $values = [])
    {

        $this->executeQuery($sql, $values);
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    /**
     * Use for SELECT return >=2 rows
     * @param string $sql
     * @param array $values = []
     * @return array objects (rows)
     */
    function getMoreRow($sql, $values = [])
    {

        $this->executeQuery($sql, $values);
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    //
    function getIDInserted()
    {
        return $this->connect->lastInsertId();
    }
}