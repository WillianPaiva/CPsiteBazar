<?php
class CtrlAtelie{

    var $conn;


    function __construct($servername, $username, $password, $dbname){
        $conn = new mysqli($servername, $username, $password, $dbname);
    }


    function __destruct(){
        $this->$conn->close();
    }
    //create the connection


    //check connection
    function checkConnection(){
        return $this->$conn->connect_error;
    }


    function createAtelier($id, $titre, $date, $lieu, $laboratoire,
                           $duree, $resume, $capacite, $table){
        $sql = "INSERT INTO ".$table." VALUES(".$id.", ".$titre.", ".$date.
             ", ".$lieu.", ".$laboratoire.", ".$duree.", ".$resume.", ".$capacite.")";
    }

}

?>
