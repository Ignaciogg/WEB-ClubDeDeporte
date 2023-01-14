<?php

  require '../main/bbdd.php';
  $message = '';

  if (!empty($_POST['nombre_instancia']) && !empty($_POST['correo_instancia']) && !empty($_POST['motivo_instancia']) && !empty($_POST['asunto_instancia'])) {
    $sql = "INSERT INTO instancias2 VALUES (default, :nombre_instancia, :correo_instancia, :motivo_instancia, :asunto_instancia)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre_instancia', $_POST['nombre_instancia']);
    $stmt->bindParam(':correo_instancia', $_POST['correo_instancia']);
    $stmt->bindParam(':motivo_instancia', $_POST['motivo_instancia']);
    $stmt->bindParam(':asunto_instancia', $_POST['asunto_instancia']);


    if ($stmt->execute()) {
        echo "<script>
                alert('Instancia creada');
                window.location= '../contacto/instancia.php'
            </script>";
    } else {
        echo "<script>
                alert('Error. Instancia no creada');
                window.location= '../contacto/instancia.php'
        </script>";
    }
  }
?>    