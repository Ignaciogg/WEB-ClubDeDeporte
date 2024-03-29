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
  <title>Baloncesto UEM</title>
</head>

<body>
<?php require '../main/header.php'?>
  
   <!-- CLASIFICACION -->
   <section class="seccionE">
    <div class="contenedor_resultados_clasificacion">
      <div class="top_div_equipos">
        <div class="h2_top_div">
          <h2 class="h2_table_top">Baloncesto</h2>
        </div>
        <div class="titulo_top_div">
          <img src="../img/basket/J1/1.jpg" id="image_equipo">
        </div>
        <div class="introduccion_equipo">
          <p>Nuestro equipo de baloncesto masculino cuenta con 12 integrantes, un entrenador y un segundo entrenador. Llevan jugando juntos desde el año pasado y las expectativas para este año son altas. Entrenan y juegan sus partidos en el polideportivo del edificio D, ¡Vente a animarles!</p>
        </div>
      </div>
      <div class="grid-top">
        <h2 class="h2_table">Resultados</h2>
        <table class="resultados">
          <tr>
            <th class="jornada"></th>
            <th class="uni">Equipo local</th>
            <th class="resultado_partido">Resultado</th>
            <th class="uni">Equipo visitante</th>
          </tr>
          <tr>
            <th class="jornada">Jornada 1</th>
            <td class="uni">Univ. Alfonso X</td>
            <th class="resultado_partido">40-56</th>
            <td class="uni">Univ. Europea</td>
          </tr>
          <tr>
            <th class="jornada">Jornada 2</th>
            <td class="uni">Univ. Europea</td>
            <th class="resultado_partido">43-54</th>
            <td class="uni">Univ. Rey Juan Carlos</td>
          </tr>
          <tr>
            <th class="jornada">Jornada 3</th>
            <td class="uni">Univ. Alcalá</td>
            <th class="resultado_partido">54-56</th>
            <td class="uni">Univ. Europea</td>
          </tr>
          <tr>
            <th class="jornada">Jornada 4</th>
            <td class="uni">Univ. Europea</td>
            <th class="resultado_partido">70-45</th>
            <td class="uni">Univ. Ceu San Pablo</td>
          </tr>
          <tr>
            <th class="jornada">Jornada 5</th>
            <td class="uni">Univ. Nebrija</td>
            <th class="resultado_partido">45-51</th>
            <td class="uni">Univ. Europea</td>
          </tr>
          <tr>
            <th class="jornada">Jornada 6</th>
            <td class="uni">Univ. Europea</td>
            <th class="resultado_partido">75-67</th>
            <td class="uni">Univ. Complutense</td>
          </tr>
          <tr>
            <th class="jornada">Jornada 7</th>
            <td class="uni">Univ. Politécnica</td>
            <th class="resultado_partido">17:30</th>
            <td class="uni">Univ. Europea</td>
          </tr>
        </table>
      </div>
      
      <div class="grid-bot">
        <h2 class="h2_table">Clasificación</h2>
        <table class="clasificacion_table">
          <tr>
            <th colspan="2" rowspan="2">Equipos</th>
            <th class="puntos" rowspan="2">Puntos</th>
            <th class="partidos" colspan="3">Partidos</th>
            <th class="anotacion" colspan="2">Anotación</th>
          </tr>
          <tr>
            <th class="jgep">Ganados</th>
            <th class="jgep">Perdidos</th>
            <th class="jgep">Jugados</th>
            <th class="anotacion">F</th>
            <th>C</th>
          </tr>
          <tr>
            <th class="clasifNum">1</th>
            <td class="unis">Univ. Politécnica</td>
            <td class="puntos">12</td>
            <td class="jgep">6</td>
            <td class="jgep">0</td>
            <td class="jgep">6</td>
            <td class="anotacion">431</td>
            <td>312</td>
          </tr>
          <tr>
            <th class="clasifNum">2</th>
            <td class="unis">Univ. Europea</td>
            <td class="puntos">11</td>
            <td class="jgep">5</td>
            <td class="jgep">1</td>
            <td class="jgep">6</td>
            <td class="anotacion">351</td>
            <td>305</td>
          </tr>
          <tr>
            <th class="clasifNum">3</th>
            <td class="unis">Univ. Alcalá</td>
            <td class="puntos">11</td>
            <td class="jgep">5</td>
            <td class="jgep">1</td>
            <td class="jgep">6</td>
            <td class="anotacion">336</td>
            <td>311</td>
          </tr>
          <tr>
            <th class="clasifNum">4</th>
            <td class="unis">Univ. Complutense</td>
            <td class="puntos">10</td>
            <td class="jgep">4</td>
            <td class="jgep">2</td>
            <td class="jgep">6</td>
            <td class="anotacion">320</td>
            <td>302</td>
          </tr>
          <tr>
            <th class="clasifNum">5</th>
            <td class="unis">Univ. CEU San Pablo</td>
            <td class="puntos">9</td>
            <td class="jgep">3</td>
            <td class="jgep">3</td>
            <td class="jgep">6</td>
            <td class="anotacion">301</td>
            <td>302</td>
          </tr>
          <tr>
            <th>6</th>
            <td class="unis">Univ. Carlos III</td>
            <td class="puntos">9</td>
            <td class="jgep">3</td>
            <td class="jgep">3</td>
            <td class="jgep">6</td>
            <td class="anotacion">297</td>
            <td>308</td>
          </tr>
          <tr>
            <th class="clasifNum">7</th>
            <td class="unis">Univ. Alfonso X</td>
            <td class="puntos">8</td>
            <td class="jgep">2</td>
            <td class="jgep">4</td>
            <td class="jgep">6</td>
            <td class="anotacion">292</td>
            <td>311</td>
          </tr>
          <tr>
            <th class="clasifNum">8</th>
            <td class="unis">Univ. Nebrija</td>
            <td class="puntos">7</td>
            <td class="jgep">1</td>
            <td class="jgep">5</td>
            <td class="jgep">6</td>
            <td class="anotacion">257</td>
            <td>356</td>
          </tr>
          <tr>
            <th class="clasifNum">9</th>
            <td class="unis">Univ. Rey Juan Carlos </td>
            <td class="puntos">7</td>
            <td class="jgep">1</td>
            <td class="jgep">5</td>
            <td class="jgep">6</td>
            <td class="anotacion">235</td>
            <td>397</td>
          </tr>
          <tr>
            <th class="clasifNum">10</th>
            <td class="unis">Univ. Pontífica de Comillas</td>
            <td class="puntos">6</td>
            <td class="jgep">0</td>
            <td class="jgep">6</td>
            <td class="jgep">6</td>
            <td class="anotacion">242</td>
            <td>406</td>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <script src="../script.js"></script>
</body>
<footer>
  <h1>Ignacio y Samuel, 2022</h1>
</footer>

</html>