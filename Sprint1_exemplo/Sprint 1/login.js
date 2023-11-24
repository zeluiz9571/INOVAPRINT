function verificarCredenciais() {
    var email = document.getElementById('email').value;
    var senha = document.getElementById('pass').value;

    // Verifique se as credenciais estão corretas
    if (email === 'caio@caio' && senha === '123') {
      // Credenciais corretas, redirecione para a nova página HTML
      window.location.assign("index.html");
    } else {
      // Credenciais incorretas, exiba uma mensagem de erro (opcional)
      alert('Credenciais incorretas. Tente novamente.');
    }
  }
