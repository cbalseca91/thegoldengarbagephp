

var ejercicio1 = () => {
  let arreglo = $("#arreglo").val();
  let numero = $("#numero").val();

  if(arreglo.trim() === '' && numero.trim() === '') {
    alert('Debe llenar todos los campos');
    return;
  }
  if( !arreglo.match(/^(-*\d+,*)+$/) ) {
    alert('El arreglo debe contener solo números negativos y/o positivos separados por comas')
    return;
  }
  if( isNaN(numero) ) {
    alert('El número no es válido')
    return;
  }
  $.ajax({
    url: 'index.php?ejercicio=ejercicio1',
    data: {arreglo: arreglo, numero: numero},
    type: 'POST',
    dataType: 'html',
    success: function(res) {
      $("#respuesta1").html(res);
    },
    error: function() {
      alert("No se pudo realizar el cálculo")
    }
  })
}

var ejercicio2 = () => {
  let patron = $("#patron").val();
  let cadena = $("#cadena").val();

  if( patron.trim() === '' || cadena.trim() === '' ){
    alert('Debe llenar todos los campos')
    return;
  }
  if( !patron.match(/^[a-z]+$/) ){
    alert('Ingrese solo letras en el patrón')
    return;
  }
  if( !cadena.match(/^([a-z1-9]+\s{0,1})+$/) ){
    alert('Ingrese solo letras, número y separelas solo por un espacio en la cadena de texto.')
    return;
  }
  $.ajax({
    url: 'index.php?ejercicio=ejercicio2',
    data: {patron: patron, cadena: cadena},
    type: 'POST',
    dataType: 'html',
    success: function(res) {
      $("#respuesta2").html(res);
    },
    error: function() {
      alert("No se pudo realizar la comprobación")
    }
  })
}
