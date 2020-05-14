<?php

class Items 
{
    
    function __construct($db) {
        $this->conn = $db;
    }

    function read(){	
        if($this->id) {
            $stmt = $this->conn->prepare("SELECT * FROM items WHERE id = ?");
            $stmt->bind_param("i", $this->id);					
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM items");		
        }		
        $stmt->execute();			
        $result = $stmt->get_result();		
        return $result;	
    }

}
