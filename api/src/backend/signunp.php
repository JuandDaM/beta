<?php
    //Creacion de variables y encriptar contraseña
    //1 DB COnnection
    require('../../config/db_connection.php');
    //2 Get Data from register Form
    $email = $_POST['email'];
    $pass = $_POST['passwd'];
    //el md5 sirve para encriptar contraseña
    $enc_pass = md5($pass);

    //3 Query to insert data into userts table
    $query = "INSERT INTO users (email, password) values ('$email', '$enc_pass')";
    //execute query 
    $result = pg_query($conn, $query);

    if ($result){
     //echo  "Registration seccessfully";
     echo "<script>alert('Registration seccessfully')</script>";
     header('Refresh:0; url=http://127.0.0.1/beta/api/src/login_form.html');
         //Redireccionar a la página principal al finalizar la registración
       
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