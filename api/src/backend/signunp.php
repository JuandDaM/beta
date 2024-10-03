<?php
    //Creacion de variables y encriptar contraseña
    //1 DB COnnection
    require('../../config/db_connection.php');
    //2 Get Data from register Form
    $email = $_POST['email'];
    $pass = $_POST['passwd'];
    $enc_pass = md5($pass);

    //3 Query to insert data into userts table
    $query = "INSERT INTO users (email, password) values ('$email', '$enc_pass')";
    $result = pg_query($conn, $query);

    if ($result){
     echo  "Registration seccessfully";
       
    }else{
        echo "Registration Failed";
    }
    pg_close($conn);
    // Imprimir y mostrar datos (de forma privada)
    /*echo "Email: " . $email ;
    echo "<br>Password: " . $pass;
    echo "<br>Enc. Password: " . $enc_pass;
    */
?>