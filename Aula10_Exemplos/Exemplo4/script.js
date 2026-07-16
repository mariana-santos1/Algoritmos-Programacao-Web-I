function aparecer() {
  var paragrafos = document.getElementsByClassName("oculto");

  while (paragrafos.length > 0){
    paragrafos[0].classList.add(paragrafos[0].id);
    paragrafos[0].classList.remove("oculto");
  }
}