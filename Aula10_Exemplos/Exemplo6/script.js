function novoItem() {
  var campos = document.getElementsByTagName("input");
  var i;
  var novaLinha = document.createElement("tr");

  for (i = 0; i < campos.length; i++) {
    var novaColuna = document.createElement("td");
    novaColuna.innerHTML = campos[i].value;
    novaLinha.appendChild(novaColuna);
  }

  var tabela = document.getElementById("tabela");
  tabela.appendChild(novaLinha);
}