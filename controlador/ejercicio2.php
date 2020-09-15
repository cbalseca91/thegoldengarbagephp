<?php


class ejercicio2 {


  public function main () {
    if($_POST) {
      $patron = $_POST['patron'];
      $cadena = explode(" ",$_POST['cadena']);
      $listaCadena = array(); //En este arreglo vamos a relacionar el caracter con la paalabra
      $respuesta = TRUE; //Esta variable valida si la cadena respeta el patrón
    }

    //Si lo tiene la misma logitud, el patrón no se cumple
    if( strlen($patron) !== count($cadena) ){
      echo "<p>La respuesta es: FALSO</p>";
      exit();
    }

    //Recorremos el patrón
    for( $i = 0; $i < strlen($patron); $i++ ){
      $respuesta = FALSE; //Si no entra en las validaciones, se queda como FALSE
      //Validamos que no exista la letra del patrón ni la palabra de la cadena
      if( !isset($listaCadena[ $patron[$i] ]) && !in_array( $cadena[$i], $listaCadena )  ){
        //Creamos al elemento
        $listaCadena[ $patron[$i] ] = $cadena[$i];
        $respuesta = TRUE;
      }elseif( isset($listaCadena[ $patron[$i] ]) && in_array( $cadena[$i], $listaCadena ) ){
        //Validamos que manengen la relación, sino el patrón se daña
        if( $listaCadena[ $patron[$i] ] == $cadena[$i] ){
          $respuesta = TRUE;
        }
      }

      //Basta un negativo, quiere decir que ya el patrón no sirve
      if(!$respuesta){
        echo "<p>La respuesta es: FALSO</p>";
        exit();
      }
    }
    //Si llegó hasta acá, quiere decir que pasó las validaciones
    echo "<p>La respuesta es: VERDADERO</p>";
  }

}
