function calcula(){
	resultado = 0;
	resultado = document.getElementById('visorcalc').value;

	document.getElementById('visorcalc').value = '';

	document.getElementById('visorcalc').value = eval(resultado);
}

function botao(num) {
	var salvo = document.getElementById('visorcalc').value += num;
}

function limpaAC(){
	document.getElementById('visorcalc').value = '';
}

