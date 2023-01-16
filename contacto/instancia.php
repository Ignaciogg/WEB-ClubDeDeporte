<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="img/d-uem.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../main/style.css">
        <title>Instancia UEM</title>
    </head>
    <body>
    <?php require '../main/header.php'?>

        <div class="seccionI">
            <div class="columnaL2">
                <h1>Contacta con nosotros</h1>
                <div class="container_instancia">
                    <form action="../main/instancia_bbdd.php" method="POST" id='formulario_instancia'>
                      <label for="fname">Nombre y apellidos</label>
                      <input type="text" class="instancia_form" id="nombre_instancia" name="nombre_instancia" placeholder="Nombre">
                  
                      <label for="lname">Correo electrónico</label>
                      <input type="text" class="instancia_form" id="correo_instancia" name="correo_instancia" placeholder="Correo electrónico">
                  
                      <label for="motivo_instancia">Motivo</label>
                      <select id="motivo_instancia" name="motivo_instancia">
                        <option value="info_instancia">Información sobre un deporte</option>
                        <option value="problemas_instancia">Problemas con la web</option>
                        <option value="otros_instancia">Otros</option>
                      </select>
                  
                      <label for="asunto_instancia">Asunto</label>
                      <textarea id="asunto_instancia" name="asunto_instancia" placeholder="Escribe algo..." style="height:200px"></textarea>
                  
                      <input type="submit" value="Enviar">
                    </form>
                  </div>
            </div>
            <div class="columnaR2">
                <h1>Campus</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4895.307404277594!2d-3.9203947623629145!3d40.372561634800604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd419031a94d45e5%3A0x375a8b6ca7a1dc4c!2sUniversidad%20Europea%20de%20Madrid!5e0!3m2!1ses!2ses!4v1671525086662!5m2!1ses!2ses" width="500" height="350" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="horario_universidad">
                    <div class="horario_uni_izq">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <i class="fa-regular fa-calendar"></i>
                        <i class="fa-sharp fa-solid fa-phone"></i>
                    </div>
                    <div class="horario_uni_der">
                        <p class="p_instancia"> C. Tajo, s/n, 28670 Villaviciosa de Odón, Madrid</p>
                        <p class="p_instancia">Lunes a Domingo de 8:00 a.m - 10:00 p.m</p>
                        <p class="p_instancia">91 740 72 72</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="../script.js"></script>
    </body>
    <footer>
        <h1>Ignacio y Samuel, 2022</h1>
    </footer>
</html>