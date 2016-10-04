<?php
class CtrlListAteliers{
    
    var $conn;

    function __construct($servername, $username, $password, $dbname){
        $this->conn = new mysqli($servername, $username, $password, $dbname);
    }

    //create the connection
    function __destruct(){
        $this->conn->close();
    }

    //check connection
    function checkConnection(){
        return $this->conn->connect_error;
    }

    function getListAteliers($table){
        $sql = "SELECT * FROM '".$table."';";
        echo 'sql : '.$sql.'<br\>';
        return $this->conn->query($sql);
    }

   function getTitreOrder($table){
       $sql = "SELECT * FROM '".$table."' ORDER BY titre;";
        echo 'sql : '.$sql.'<br\>';
        return $this->conn->query($sql);
    }

    function getDateOrder($table){
       $sql = "SELECT * FROM '".$table."' ORDER BY date;";
        echo 'sql : '.$sql.'<br\>';
        return $this->conn->query($sql);
    }

    function getThemeOrder($table){
       $sql = "SELECT * FROM '".$table."' ORDER BY theme;";
        echo 'sql : '.$sql.'<br\>';
        return $this->conn->query($sql);
    }   
}
?>