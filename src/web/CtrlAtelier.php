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


    function createAtelier($id, $titre, $theme, $date, $remarque, $lieu,
                           $duree, $resume, $capacite, $partenaires , $public_vise, $contenu, $table){
        $sql = "INSERT INTO ".$table." VALUES(".$id.", ".$theme.", ".$titre.", ".$date.", ".$remarque.
             ", ".$lieu.", ".$duree.", ".$resume.", ".$capacite.", ".$partenaires." , ".$public_vise.", ".$contenu.")";
        return $conn->query($sql);
    }

}

?>
