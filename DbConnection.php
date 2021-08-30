<?php
class DbConnection{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'test01';
 
    protected $connection;
 
    public function __construct(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->database;
 
        if (!isset($this->connection)) {
 
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
 
        return $this->connection;
    }
}
?>