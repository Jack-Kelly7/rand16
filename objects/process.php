<?php
class Process {
    // database connection and table name
    private $conn;
    private $table_name = "main";

    public $site;
    public $string;
    public $email;

    public function __construct($db){
        $this->conn = $db;
    } 

 
    // Create submission
    function create(){
        // Validations Should Go Here

        
        // Write query
        $query = "INSERT INTO " . $this->table_name . " SET site=:site, string=:string, email=:email";
        // Prepare statement
        $stmt = $this->conn->prepare($query);
        // Bind parameters 
        $stmt->bindParam(":site", $this->site);
        $stmt->bindParam(":string", $this->string);
        $stmt->bindParam(":email", $this->email);
        // Attempt to execute statement
        if($stmt->execute()){
            return true;
        } else {                           
            return false;
        }
    }
}
?>