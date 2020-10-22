<!DOCTYPE html>
<html lang="pr-br">
	
	<head>
		<script type="text/javascript" src="js/logica.js"></script>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
		<table name="calc" class="calculadora">
			<tr>
				<th colspan="4"><input type="text" name="visorcalc" id="visorcalc"/></th>
			</tr>

			<tr>
				<td><input type="button" value="(" onclick="botao(value);" class="bextremidade"/></td>
				<td><input type="button" value=")" onclick="botao(value);" class="bextremidade"/></td>
				<td><input type="button" value="%" onclick="botao('/100');" class="bextremidade"/></td>
				<td><input type="button" value="AC" onclick="limpaAC(value);" class="bextremidade"/></td>
			</tr>
			
			<tr>
				<td><input type="button" value="7" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="8" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="9" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="/" onclick="botao(value);" class="bextremidade"/></td>
			</tr>
			
			<tr>
				<td><input type="button" value="4" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="5" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="6" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="*" onclick="botao(value);" class="bextremidade"/></td>
			</tr>

			<tr>
				<td><input type="button" value="1" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="2" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="3" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="-" onclick="botao(value);" class="bextremidade"/></td>
			</tr>
			
			<tr>
				<td><input type="button" value="0" onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="." onclick="botao(value);" class="bnumero"/></td>
				<td><input type="button" value="=" onclick="calcula(value);" id="blaranja"/></td>
				<td><input type="button" value="+" onclick="botao(value);" class="bextremidade"/></td>
			</tr>
		</table>
	</body>

</html>
