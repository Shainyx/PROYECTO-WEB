<?php

    function conectado(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        
        $bd = "Vallejo_Notice";

        $connect = mysqli_connect($host,$user,$pass,$bd);

        mysqli_select_db($connect,$bd);

        return $connect;
    };

?>