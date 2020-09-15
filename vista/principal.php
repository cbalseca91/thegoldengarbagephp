<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TheGoldenGarbage</title>
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="vista/css/index.css">
    <script type="text/javascript" src="vista/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="vista/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vista/js/principal.js"></script>
  </head>
  <body>
    <h1>TheGoldenGarbage</h1>
    <ul>
      <li>Ejercicio 1 y Ejercicio 2 está en base al correo</li>
      <li>Los campos no se vacían a propósito con el fin de que se haga una comparación</li>
      <li>Las comillas de la respuesta del Ejercicio 1 se debe a la función stringify</li>
      <li>Para este desarrollo se utilizó ReactJS</li>
    </ul>
    <div class='contenedor'>
      <div class='ejercicio'>
        <h3>Ejercicio 1</h3>
        <div>
          <label>Introduzca el arreglo</label>
          <input
            class='form-control'
            placeholder='Separe por comas. Ej. 1,1,1,-5'
            id="arreglo"
          />
        </div>
        <div>
          <label>Introduzca el número</label>
          <input
            type='number'
            class='form-control'
            placeholder='Ej. 2'
            id="numero"
          />
        </div>
        <div>
          <hr>
          <button class='btn btn-success' onClick="ejercicio1()">
            Calcular
          </button>
          <hr>
        </div>
        <div id="respuesta1">

        </div>
      </div>
      <div class='ejercicio'>
        <h3>Ejercicio 2</h3>
        <div>
          <label>Introduzca el patrón</label>
          <input
            class='form-control'
            placeholder='Ej. abbab'
            id="patron"
          />
        </div>
        <div>
          <label>Introduzca la cadena de texto</label>
          <input
            class='form-control'
            placeholder='Separe por espacios. Ej. perro gato gato ...'
            id="cadena"
          />
        </div>
        <div>
          <hr>
          <button class='btn btn-success' onClick="ejercicio2()">
            Comprobar
          </button>
          <hr>
        </div>
        <div id="respuesta2">

        </div>
      </div>
    </div>
  </body>
</html>
