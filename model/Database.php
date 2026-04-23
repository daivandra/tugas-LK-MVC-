<?php
class Database
{
  private $host = 'localhost';
  private $dbname = 'mvc_db';
  private $username = 'root';
  private $password = '';
  public function connect()
  {
    try {
      $pdo = new PDO(
        "mysql:host=127.0.0.1;port=3307;dbname={$this->dbname};charset=utf8",
        $this->username,
        $this->password
      );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      die("Database connection failed: " . $e->getMessage());
    }
  }
}