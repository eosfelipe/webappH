$(document).ready(function(){
  $('#os').hide();
});
function siguiente(e){
  // var valor = document.getElementById('opc1');
  var pregunta = document.getElementsByClassName('input-hidden');
  // console.log(pregunta);
  console.log(e.target.value);
  // console.log(pregunta[0].value);
  Reveal.navigateRight();
}
function iniciar(e){
  if(e.charCode == 13){
    e.preventDefault();
    var numOrden = document.getElementById('ordenServicio');
    var atendiendo = document.getElementById("atendiendo");
    agregarLocal('numOrden',numOrden);
    $('#os').show();
    atendiendo.innerHTML = obtenerLocal('numOrden');
    Reveal.navigateRight();
  }
  else{
    console.log('no es enter');
  }
}

function finalizar(){
  $('#ordenForm').submit(function(event){
    event.preventDefault();
    var respuestas = $('#ordenForm').serialize();
    insertarBD(respuestas);
    // setTimeout(function(){
    //   console.log('estamos en el timeout');
    //   location.reload()
    // },5000);
  });
}

function insertarBD(datos){
  console.log(datos);
  var jqxhr = $.ajax({
    data: datos,
    method: 'POST',
    url: 'accion.php'
  })
  .done(function(response){
    console.log(response);
    if(response == 'ok'){
      swal("¡Gracias por su tiempo!", "", "success")
      .then(function(){
        location.reload();
      })
    }
  })
  .fail(function(){
    console.error('Ocurrio un error');
  })
  .always(function(){
    eliminarLocal('numOrden');
    console.log('localStorage eliminado');
  })
}

function agregarLocal(n,e){localStorage.setItem(n,'HYUNDAI'+e.value);}

function eliminarLocal(e){localStorage.removeItem(e);}

function obtenerLocal(e){return localStorage.getItem(e);}
