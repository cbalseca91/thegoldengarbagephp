<?php

require_once('controlador/ejercicio1.php');
require_once('controlador/ejercicio2.php');

if (isset( $_GET['ejercicio'] )) {
  switch ( $_GET['ejercicio'] ) {
    case 'ejercicio1':
      $ejercicio1 = new ejercicio1();
      $ejercicio1->main();
      break;
    case 'ejercicio2':
      $ejercicio2 = new ejercicio2();
      $ejercicio2->main();
      break;

    default:
      require_once('vista/principal.php');
      break;
  }
}else{
  require_once('vista/principal.php');
}
