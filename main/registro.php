<?php

  require '../main/bbdd.php';
  $message = '';

  if (!empty($_POST['uname_registro']) && !empty($_POST['lname_registro']) && !empty($_POST['email_registro']) && !empty($_POST['psw_registro'])) {
    $sql = "INSERT INTO users VALUES (default, :uname_registro, :lname_registro, :email_registro, :psw_registro)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':uname_registro', $_POST['uname_registro']);
    $stmt->bindParam(':lname_registro', $_POST['lname_registro']);
    $stmt->bindParam(':email_registro', $_POST['email_registro']);
    //Cifrar contraseña
    //$password = password_hash($_POST['psw_registro'], PASSWORD_BCRYPT);
    $stmt->bindParam(':psw_registro',$_POST['psw_registro']); 

    if ($stmt->execute()) {
        echo "<script>
                alert('Usuario creado');
                window.location= '../main/index.php'
            </script>";
    } else {
        echo "<script>
                alert('Error. Usuario no creado');
                window.location= '../main/index.php'
             </script>";
    }
  }
?>