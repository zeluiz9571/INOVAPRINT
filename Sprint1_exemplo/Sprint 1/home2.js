// Selecione o elemento <input> pelo ID
const botaoAcessibilidade = document.getElementById("botao-acessibilidade");

// Função para redirecionar para "page1.html"
function redirecionarParaPage1() {
    window.location.href = "index.html";
}

// Adicione um ouvinte de evento para o evento "change" (quando a caixa de seleção muda)
botaoAcessibilidade.addEventListener('change', () => {
    // Verifique se a caixa de seleção está desmarcada
    if (!botaoAcessibilidade.checked) {
        // Aguarde 3 segundos (3000 milissegundos) antes de redirecionar
        setTimeout(redirecionarParaPage1, 300); // 3000 milissegundos = 3 segundos
    }
});