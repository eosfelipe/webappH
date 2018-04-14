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

function finalizar(){
  $('#ordenForm').submit(function(event){
    event.preventDefault();
    var respuestas = $(this); //$('#ordenForm').serializeArray();
    if(validarForm(respuestas)){
      console.log(respuestas);
      insertarBD(respuestas);
    }
    else{
      swal("Favor de respoder todas las preguntas", "", "warning");
    }
    // setTimeout(function(){
    //   console.log('estamos en el timeout');
    //   location.reload()
    // },5000);
  });
}

function validarForm(r){
  const radio = r.querySelectorAll('input[type=radio]:checked');
  if(radio.length < 7){
    return false;
  }
  else{
    return true;
  }
}

function insertarBD(datos){
  // console.log(datos.data());
  // if(datos.data('locked') != undefined && !datos.data('locked')){
  //   console.log('locked');
  // }
  var jqxhr = $.ajax({
    data: datos.serialize(),
    beforeSend: function(){datos.data('locked',true);},
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
  })
  .fail(function(){
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
