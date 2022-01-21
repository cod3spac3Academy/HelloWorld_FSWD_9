<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Basicos Ejercicio 1.1</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 bg-light mb-2">
        <?php
        /* Apartado 1: Mostrar nombre del día de la semana según el número de día. Además se dirá si es fin de semana: */

        $dias = array('domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado');
        echo "Hoy es " . $dias[date("w")] . ", ";

        if ($dias[date("w")] === 0 || $dias[date("w")] === 6) {
          echo 'es fin de semana';
        } else {
          echo 'no es fin de semana';
        };

        echo "<br>";
        ?>

      </div>

      <div class="col-12 bg-light mb-2">
        <?php
        /* Apartado 2: Mostrar si un año es bisiesto. Es el divisible entre 4, salvo que sea año secular (último de cada siglo)
          terminado en 00, en cuyo caso también ha de ser divisible entre 400: */
        $año = date("Y");

        if ($año % 4 === 0 || $año % 400 === 0) {
          echo "$año es año bisiesto";
        } else {
          echo "$año no es año bisiesto";
        };


        echo "<br>";
        ?>

      </div>

      <div class="col-12 bg-light mb-2">
        <?php
        /* Apartado 3: Mostrar el nombre del mes según el número del mes y además nos diga cuantos días tiene ese mes: */

        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

        setlocale(LC_ALL, "es_ES");       /* con este comando convertimos las unidades de los resultados a español */

        echo "Estamos en el mes de " . $meses[date('n') - 1];

        echo " y tiene " . date('t') . " días";



        echo "<br>";
        ?>

      </div>

      <div class="col-12 bg-light mb-2">
        <?php
        /* Apartado 4: Programa que calcule el promedio de 4 notas: 55,71,46,87 y nos diga si el promedio es matrícula (+ de 9),
          aprobado o suspenso: */

        $nota1 = 5.5;
        $nota2 = 7.1;
        $nota3 = 4.6;
        $nota4 = 8.7;

        echo "Nota media: " . $notaMedia = round((($nota1 + $nota2 + $nota3 + $nota4) / 4), 2);

        if ($notaMedia > 9) {
          echo ". Tienes nota media de matrícula";
        } else if ($notaMedia >= 5) {
          echo ". Tienes nota media de aprobado";
        } else {
          echo ". Tienes nota media de suspenso";
        };



        echo "<br>";
        ?>

      </div>

      <div class="col-12 bg-light mb-2">
        <?php
        /* Apartado 5: Programa que dada una temperatura en grados celsius o farenheit la convierta a la otra escala, teniendo
          en cuenta que:
          De celsius a fahrenheit, primero multiplica por 180/100, después suma 32
          De fahrenheit a celsius, primero resta 32, luego multiplica por 100/180: */


        $temperaturaCelsius = 16;
        $temperaturaFahrenheit = 70;

        $aFahrenheit = round(($temperaturaCelsius * 180 / 100 + 32), 2);
        echo "La temperatura $temperaturaCelsius grados Celsius equivale a $aFahrenheit grados Fahrenheit";

        echo "<br>";

        $aCelsius = round((($temperaturaFahrenheit - 32) * 100 / 180), 2);
        echo "La temperatura $temperaturaFahrenheit grados Fahrenheit equivale a $aCelsius grados Celsius";

        ?>

      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>