<?php
class CtrlAtelier{

    var $conn;


    function __construct($servername, $username, $password, $dbname){
        $this->conn = new mysqli($servername, $username, $password, $dbname);
    }


    function __destruct(){
        $this->conn->close();
    }
    //create the connection


    //check connection
    function checkConnection(){
        return $this->conn->connect_error;
    }


    function createAtelier($titre, $theme, $date, $remarque, $lieu,
                           $duree, $resume, $capacite, $partenaires , $public_vise, $contenu, $table){
        $sql = "INSERT INTO ".$table." (titre, theme, date, remarque, lieu, duree, resume, capacite, partenaires, public_vise,contenu) ".
             " VALUES ('".$theme."', '".$titre."', '".$date."', '".$remarque.
             "', '".$lieu."', '".$duree."', '".$resume."', '".$capacite."', '".$partenaires."', '".$public_vise."', '".$contenu."');";
        return $this->conn->query($sql);
    }

    //delete atelier by id
    function deleteAtelier($id, $table){
        $sql = "DELETE FROM ".$table." WHERE id=".$id;
        return $conn->query($sql);
    }

    //get atelier by id
    function getAtelier($id, $table){
        $sql = "SELECT * FROM ".$table." WHERE id=".$id;
        return $conn->query($sql);
    }

}

?>
