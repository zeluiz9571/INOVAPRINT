<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="carrinho.css">

</head>
<body>






<?php
include("header.php")
?>

		<br>
		<h1 align="center">CARRINHO DE COMPRAS</h1>
		<br>
		<div id="fundo">
		<div id="itens"> </div>
		<br>
		<div>Total: <span id="total"></span> </div>

		<script>
			var total = 0; // variável que retorna o total dos produtos que estão na LocalStorage.
			var i = 0;     // variável que irá percorrer as posições
			var valor = 0; // variável que irá receber o preço do produto convertido em Float.
	
			// exibe o total dos recheios
			document.getElementById("total").innerHTML = total.toFixed(2);
	
			for (i = 1; i <= 99; i++) {
				var prod = localStorage.getItem("produto" + i);
				if (prod != null) {
					// Cria um elemento de div para cada item do carrinho
					var itemDiv = document.createElement("div");
	
					// Exibe os dados do item dentro da div
					itemDiv.innerHTML += localStorage.getItem("qtd" + i) + " x ";
					itemDiv.innerHTML += localStorage.getItem("produto" + i);
					itemDiv.innerHTML += " ";
					itemDiv.innerHTML += "R$: " + localStorage.getItem("valor" + i);
	
					// Cria um botão de excluir para cada item
					var excluirButton = document.createElement("button");
					excluirButton.innerHTML = "Excluir";
					excluirButton.addEventListener("click", createExcluirItemHandler(i));
	
					// Adiciona o botão de excluir à div do item
					itemDiv.appendChild(excluirButton);
	
					// Adiciona a div do item à div "itens"
					document.getElementById("itens").appendChild(itemDiv);
	
					valor = parseFloat(localStorage.getItem("valor" + i));
					total = total + valor;
				}
			}
			document.getElementById("total").innerHTML = total.toFixed(2);
	
			function createExcluirItemHandler(index) {
				return function() {
					// Lógica para excluir o item do carrinho
					// Pode ser implementada aqui ou chamando uma função externa
	
					// Exemplo de código para remover o item atual do carrinho
					this.parentNode.remove();
	
					// Atualizar o total
					var itemValue = parseFloat(localStorage.getItem("valor" + index));
					total -= itemValue;
					document.getElementById("total").innerHTML = total.toFixed(2);
	
					// Remover o item da localStorage
					localStorage.removeItem("produto" + index);
					localStorage.removeItem("qtd" + index);
					localStorage.removeItem("valor" + index);
				}
			}
		</script>
<br>
		<button type="button" id="limpar" onclick=" localStorage.clear(); location.reload();"> Limpar carrinho </button>
	</div>

		<section>
        <br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
			<div align="center" id="botaofinal"><a href="finalizar.html">FINALIZAR COMPRA</a></div>
			
			
			

		</section>
		
	<?php
    include("footer.php")
    ?>