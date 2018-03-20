<?php
class Database {
  private $connection;

  const DB_DRIVER = 'mysql',
        DB_HOST = 'localhost',
        DB_USER = 'root', 
        DB_PASS = '',
        DB_NAME = 'trikator';

  public function __construct() {
    $this->connection = null;
    try {
      $this->connection = new PDO(self::DB_DRIVER . ':host=' . self::DB_HOST . ';dbname=' .
                                  self::DB_NAME . ';charset=utf8;', self::DB_USER, self::DB_PASS);
    } catch (PDOExecption $e) {
      echo 'Connection has failed! ' . $e->getMessage();
    }
  }
  public function getConnection() {
      return $this->connection;
  }
}