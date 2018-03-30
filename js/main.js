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
    agregarLocal('numOrden',numOrden);
    console.log('HYUNDAI' + numOrden.value);
    document.getElementById("atendiendo").innerHTML = obtenerLocal('numOrden');
    Reveal.navigateRight();
  }
  else{
    console.log('no es enter');
  }
}

function terminar(){
  //post informacion a la BD
  //...
  //...
  eliminarLocal('numOrden');
}

function agregarLocal(n,e){localStorage.setItem(n,'HYUNDAI'+e.value);}

function eliminarLocal(e){localStorage.removeItem(e);}

function obtenerLocal(e){return localStorage.getItem(e);}
