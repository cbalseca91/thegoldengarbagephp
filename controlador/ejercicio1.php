<?php


class ejercicio1 {


  public function main () {
    //Verificamos que existan variables POST
    if($_POST){
      $resultado = array();
      $usados = array();
      $elementos = explode(",",$_POST['arreglo']);
      $numero = floatval($_POST['numero']);

      //Recorremos el arreglo en primera instancia
      foreach ($elementos as $i => $itemx) {
        if( !in_array($i, $usados) ){ //validamos que no se repita
          //Recorremos nuevamente el arreglo
          for ($j = intval($i) + 1 ; $j < count($elementos) ; $j++) {
            if( !in_array($j, $usados) ){ //Validamos que no se repita
              if( floatval($itemx) + floatval($elementos[$j]) == $numero ){ //Comprobamos que sean  iguales
                $resultado[] = array($itemx,$elementos[$j]); //Agregamos a resultados
                array_push($usados, $i, $j); //Agregamos a usados
                break;
              }
            }
          }
        }
      }
      //IMPRIMIMOS LA RESPUESTA:
      echo "<p>TOTAL: ".count($resultado)."</p>";
      echo "<pre>". json_encode($resultado, JSON_UNESCAPED_UNICODE) ."</pre>";
    }
  }

}
