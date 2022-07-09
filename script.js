  
  function funcao1(){
var x;
  var r= Window.alert("Digite seu email:");
  if (r==true){
    x = "você pressionou OK!";
  }
  else{
    x = "Você pressionou Cancelar!";
  }
  document.getElementById("es").innerHTML=x;
}