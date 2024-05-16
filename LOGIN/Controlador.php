<?php
    /*include_once('../CONEXION_PHP/Conexion.php');
    $con = conectado();

    if(!empty($_POST["btnIngresar"])){
        if(empty($_POST["email"]) and empty($_POST["password"])){
            echo 'LOS CAMPOS ESTAN VACIOS';
        }else{
            $email = $_POST["email"];
            $clave = $_POST["password"];
            $sql = $con->query("Select * from usuario where email='$email' and clave='$clave' ");
            if($datos=$sql->fetch_object()){
                header("location:Inicio.html");
            }else{
                echo 'ACCESO DENEGADO';
            }
        }
    }*/

    //Se utilizo preparedstatement por tema de seguridad
    include_once('../CONEXION_PHP/Conexion.php');
    $con = conectado();

    if (!empty($_POST["btnIngresar"])) {
        if (empty($_POST["email"]) && empty($_POST["password"])) {
            echo 'LOS CAMPOS ESTAN VACIOS';
        } else {
            $email = $_POST["email"];
            $clave = $_POST["password"];

            // Consulta preparada
            $pstmt = $con->prepare("SELECT * FROM usuario WHERE email=? AND clave=?");
            $pstmt->bind_param("ss", $email, $clave); //"i" para enteros, "d" para números de coma flotante, "s" para cadenas, "b" para datos binarios.
            $pstmt->execute();
            $result = $pstmt->get_result();

            if ($result->num_rows > 0) {
                header("location:Inicio.html");
            } else {
                echo 'ACCESO DENEGADO';
            }

            // Cerrar la consulta preparada
            $pstmt->close();
        }
    }

?>