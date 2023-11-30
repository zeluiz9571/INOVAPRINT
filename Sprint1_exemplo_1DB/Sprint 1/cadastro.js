function verificarCredenciais() {
  var checkbox = document.getElementById('flexCheckDefault');

  if (checkbox.checked) {
    var passw = document.getElementById('passw').value;
    var passwc = document.getElementById('passwc').value;

    if (passw === passwc) {
      window.location.assign ("login.html");
    } else {
      alert('Senhas não congruentes. Tente novamente.');
    }
  } else {
    alert('Marque a seleção antes de prosseguir.');
  }
}