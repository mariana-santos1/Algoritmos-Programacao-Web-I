function recuperarPs(){
  var paragrafos = document.getElementsByTagName("p");
  var i = 0;

  while (i < paragrafos.length){
    alert(paragrafos[i].innerHTML);
    i++;
  }
}