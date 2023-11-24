// Selecione o elemento <input> pelo ID
const botaoAcessibilidade = document.getElementById("botao-acessibilidade");

// Adicione um ouvinte de evento para o evento "change" (quando a caixa de seleção muda)
botaoAcessibilidade.addEventListener('change', () => {
    // Verifique se a caixa de seleção está marcada
    if (botaoAcessibilidade.checked) {
        // Aguarde 3 segundos (3000 milissegundos) antes de redirecionar
        setTimeout(() => {
            // Redirecione para "home2.html"
            window.location.href = "Politica de privacidade2.html";
        }, 300); // 3000 milissegundos = 3 segundos
    }
});