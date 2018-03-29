function mostrar(e){
  // var valor = document.getElementById('opc1');
  var pregunta = document.getElementsByClassName('input-hidden');
  // console.log(pregunta);
  console.log(e.target.value);
  // console.log(pregunta[0].value);
}
function verEvento(e){
  if(e.charCode == 13){
    e.preventDefault();
    var numOrden = document.getElementById('ordenServicio');
    console.log('HYUNDAI' + numOrden.value);
    Reveal.navigateRight();
  }
  else{
    console.log('no es enter');
  }
}
