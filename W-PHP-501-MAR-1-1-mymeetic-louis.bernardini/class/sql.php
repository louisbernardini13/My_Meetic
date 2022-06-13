<?php

class Sql {
    private static $connection;
    // class statique
    static function initialize() {
        self::$connection = new mysqli('localhost' , 'root' , '' , 'my_meetic');
    }
    static function select($requete) {
        $result = self::$connection->query($requete);
        $tabResult = array();
        if($result){
            while($record = $result->fetch_object()){
                array_push($tabResult, $record);
            }
            return $tabResult;
        }
        return false;        
    }
    static function update($data) {
        var_dump($data);
        if (isset($data['id']) && $data['id']){
            // update
        }
        
        else {
            unset($data['id']);
            $sql = "INSERT INTO utilisateurs (" . implode( ',' ,array_keys($data)) . ")
            VALUES ('" . implode( '\',\'' , $data) . "')";
            if (self::$connection->query($sql) === TRUE) {
                echo "New record created successfully";
            } 
            else {
                echo "Error: " . $sql . "<br>" . self::$connection->error;
                return false;
            }
        }  
    }

    static function sanitize($data){
        return self::$connection->real_escape_string($data);
        // deplacer stripslashes ici 
    }
}