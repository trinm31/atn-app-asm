<?php
class Database {
    // Connection variables
    private $host = "ec2-50-17-90-177.compute-1.amazonaws.com";
    private $dbName = "d302jgs2ffsb8q";
    private $username = "tuftbcymifesjs";
    private $password = "9030dfe165c9a3aa812ceed5d08e5a0ed7eeb5787eb73ea6bc072e255b99cf57";

    public $conn;

    // Method return security connection
    public function dbConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->username, $this->password, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

?>
