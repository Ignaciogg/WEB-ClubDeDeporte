<?php

    session_start();

    if (isset($_SESSION['user_id'])) {
        header('Location: ../main/index.php');
    }

    require '../main/bbdd.php';

    if (!empty($_POST['uname_login']) && !empty($_POST['psw_login'])) {
        $stmt = $conn->prepare('SELECT iduser, nombre, email, pass FROM users WHERE email = :email');
        $stmt->bindParam(':email', $_POST['uname_login']);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (!empty($results) && password_verify($_POST['psw_login'], $results['pass'])) {
            $_SESSION['user_id'] = $results['iduser'];
            echo("<script>
                    alert(' Bienvenido ".$results['nombre']."');
                    window.location= '../main/index.php'
                </script>");
        }else {
            echo("<script>
                    alert('Error, credenciales inválidas');
                    window.location= '../main/index.php'
                </script>");
        }
    }

?>