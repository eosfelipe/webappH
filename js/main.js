$(document).ready(function(){
  $('#os').hide();
  $('select').formSelect();
});
function siguiente(e){
  // var valor = document.getElementById('opc1');
  var pregunta = document.getElementsByClassName('input-hidden');

  console.log(e.target.value);
  // console.log(pregunta[0].value);
  if(obtenerLocal('numOrden') === null){
    swal("No se ha ingresado número de orden","","warning")
    .then(function(){
      Reveal.prev();
    })
  }
  else {
    Reveal.navigateRight();
  }
}
function iniciar(e){
  var charCode = e.charCode || e.keyCode || e.wich; //para chrome y firefox
  if(charCode == 13){
    e.preventDefault();
    var numOrden = document.getElementById('ordenServicio');
    if(numOrden.value.length <= 0){
      swal("Favor de insertar su número de servicio", "", "warning");
    }
    else{
      var atendiendo = document.getElementById("atendiendo");
      agregarLocal('numOrden',numOrden);
      $('#os').show();
      atendiendo.innerHTML = obtenerLocal('numOrden');
      Reveal.navigateRight();
    }
  }
  else{
    console.log('no es enter');
  }
}
function iniciar2(e){
  e.preventDefault();
  var numOrden = document.getElementById('ordenServicio');
  var atendiendo = document.getElementById("atendiendo");
  agregarLocal('numOrden',numOrden);
  $('#os').show();
  atendiendo.innerHTML = obtenerLocal('numOrden');
  Reveal.navigateRight();
}

// function finalizar(){
//   $('#ordenForm').submit(function(event){
//     event.preventDefault();
//     var respuestas = $(this); //$('#ordenForm').serializeArray();
//     if(validarForm(respuestas)){
//       console.log('respuestas después de validarForm**************************');
//       console.log(respuestas);
//       // insertarBD(respuestas);
//     }
//     else{
//       swal("Favor de respoder todas las preguntas", "", "warning");
//       console.log('no pasó validarForm****************************************');
//       console.log(respuestas);
//       console.log(respuestas[0]);
//     }
//   });
// }

function finalizar(event){
  var respuestas = $('#ordenForm');
  if(validarForm(respuestas)){
    $('#ordenForm').submit(function(event){
      event.preventDefault(event);
      console.log('valido');
      console.log(respuestas.serialize());
      insertarBD(respuestas);
      // btnFinalizar.prop('disabled', false);
    })
  }else{
    swal("Favor de respoder todas las preguntas", "", "warning");
    event.preventDefault(event);
  }
}

function validarForm(r){
  const radio = r.find('input[type=radio]:checked');
  if(radio.length < 8){
    Reveal.configure({ controls: true });
    return false;
  }
  else{
    return true;
  }
}

function insertarBD(datos){
  var btnFinalizar = $('#btnFinalizar');
  // btnFinalizar.prop('disabled', true);

  var jqxhr = $.ajax({
    data: datos.serialize(),
    beforeSend: function(){btnFinalizar.prop('disabled', true);},
    method: 'POST',
    url: 'backend/codeigniter/index.php',
    complete: function(){datos.data('locked',false);}
    // url: 'accion.php'
  })
  .done(function(response){
    console.log(response);
    if(response == 'ok'){
      swal("¡Gracias por su tiempo!", "", "success")
      .then(function(){
        console.log('window.location.reload()')
        window.location.reload();
      })
    }
    else{
      swal("ERROR, la orden de servicio " +obtenerLocal('numOrden')+" ya existe","","error")
      .then(function(){
        window.location.reload();
      })
    }
  })
  .fail(function(response){
    console.log(response);
    console.error('Ocurrio un error');
  })
  .always(function(){
    eliminarLocal('numOrden');
    console.log('localStorage eliminado');
    $('#ordenForm').each(function(){this.reset();});//para limpiar firefox
  })
}

function agregarLocal(n,e){localStorage.setItem(n,'HYUNDAI'+e.value);}

function eliminarLocal(e){localStorage.removeItem(e);}

function obtenerLocal(e){return localStorage.getItem(e);}
