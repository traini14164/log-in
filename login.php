<?php
class User {

    // database connection and table name
    private $conn;
    private $table_name = "utente";
 
    // object properties
    public $id;
    public $nome;
    public $username;
    public $password;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db) {
        $this->conn = $db;
    }
    // signup user
    function signup(){

        // cHeck if username already exist in the database
        if ($this->isAlreadyExist()) {
            return false;
        }

        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    nome=:nome, username=:username, password=:password";
    
        // prepare query
        $stmt = $this->conn->prepare($query);
    
        // execute query
        if($stmt->execute(array( ':username' => $this->username,':nome' => $this->nome, ':password' => $this->password))) 
        {
            return true;
        }
    
        return false;
    }
    // login user
    function login() {
        // select all query
        $query = "SELECT
                     `username`, `password`
                FROM
                    " . $this->table_name . " 
                WHERE
                    username=:username AND password=:password";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute(array(':username' => $this->username, ':password' => $this->password));
        return $stmt;
    }

    function isAlreadyExist() {
        $query = "SELECT *
            FROM
                " . $this->table_name . " 
            WHERE
                username=:username";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute(array(':username' => $this->username));
        if($stmt->rowCount() > 0) {
            return true;
        }
        else {
            return false;
        }
    }
    function showall()
    {
        $q = "SELECT *
        FROM
            " . $this->table_name ;
         $stmt = $this->conn->prepare($q);
         $stmt->execute(array(':username' => $this->username));
         $i=$stmt->rowCount();
         echo '<table border="1px solid black" ><tr><th>id</th><th>nome</th><th>username</th><th>password</th></tr>';
        while ( $data=$stmt->fetch(PDO::FETCH_ASSOC)) {         
            
            echo '<tr><td>'. $data['id_utente'].'</td>';
            echo '<td>'. $data['nome'].'</td>';
            echo '<td>'. $data['username'].'</td>';
            echo '<td>'. $data['password'].'</td></tr>';
        }
        echo "</table>";
    }
}