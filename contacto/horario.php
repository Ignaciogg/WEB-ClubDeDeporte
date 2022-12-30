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
        <title>Horario UEM</title>
      </head>
    <body>
    <?php require '../main/header.php'?>

        <div class="seccionI">
            <table class="horario">
                <thead>
                  <caption class="titulo-horario">
                    HORARIO CURSO 2022/23
                  </caption>
                  <th class="hora">HORA</th>
                  <th>LUNES</th>
                  <th>MARTES</th>
                  <th>MIERCOLES</th>
                  <th>JUEVES</th>
                  <th>VIERNES</th>
                </thead>
                <tbody>
                  <tr>
                    <td class="hora">17:00 - 18:00</td>
                    <td class="otro piscina">Piscina</td>
                    <td class="otro volM">Volley Masculino</td>
                    <td class="otro libre">LIBRE</td>
                    <td class="otro libre">LIBRE</td>
                    <td class="otro volF">Volley Femenino</td>
                  </tr>
                  <tr>
                    <td class="hora">18:00 - 19:00</td>
                    <td class="otro volF">Volley Femenino</td>
                    <td class="otro libre">LIBRE</td>
                    <td class="otro volM">Volley Masculino</td>
                    <td class="otro piscina">Piscina</td>
                    <td class="otro libre">LIBRE</td>
                  </tr>
                  <tr>
                    <td class="hora">19:00 - 20:00</td>
                    <td class="otro atlet">Atletismo</td>
                    <td class="otro volF">Volley Femenino</td>
                    <td class="otro bal">Baloncesto</td>
                    <td class="otro atlet">Atletismo</td>
                    <td class="otro atlet">Atletismo</td>
                  </tr>
                  <tr>
                    <td class="hora">20:00 - 21:00</td>
                    <td class="otro fut11">Fútbol 11</td>
                    <td class="otro bal">Baloncesto</td>
                    <td class="otro piscina">Piscina</td>
                    <td class="otro bal">Baloncesto</td>
                    <td class="otro fut11">Fútbol 11</td>
                  </tr>
                  <tr>
                    <td class="hora">21:00 - 22:00</td>
                    <td class="otro futsal">Fútbol sala</td>
                    <td class="otro fut11">Fútbol 11</td>
                    <td class="otro futsal">Fútbol sala</td>
                    <td class="otro volM">Volley Masculino</td>
                    <td class="otro futsal">Fútbol sala</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <script src="../script.js"></script>
    </body>
    <footer>
        <h1>Ignacio y Samuel, 2022</h1>
    </footer>
</html>