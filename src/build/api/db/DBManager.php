<?php
    
    class DB {
        
        public $pdo;
    
        function __construct() {
    
            try {	
                $this->pdo = new PDO("mysql:host=localhost;dbname=notes","root",""); 
            } catch(PDOException $e) {
                die('Failed to connect to local database.');
            }
    
        }
    
    }
    
?>
