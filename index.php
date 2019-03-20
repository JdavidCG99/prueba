<!DOCTYPE html>
<html>
<head>
	<title>Metodo grafico</title>
	<meta charset="utf-8">
	<style>
		table{
				border:10px solid #000000  ;
				padding: 20px 50px;
				marging-top:100px;
		}
		body{
				background-color:#404EFF;
		}
	</style>
</head>
<body>
	<h1 align="center">Solucion metodo grafico</h1>
	<br><br>
	<form name="form1" method="post" action="solucion.php">
	<table  align="center">
 	  <tr>
	  <td align="center">Nombre de la empresa
	  <input type="text" name="nombre" id="nombre"></td>
	  </tr>
	  <tr>
	  <td align="center">Nombre del producto 1
	  <input type="text" name="producto1" id="producto1"></td>
	  </tr>
	  <tr>
	  <td align="center">Nombre del producto 2
	  <input type="text" name="producto2" id="producto2"></td>
	  </tr>
	<tr><td align="center"><br>INGRESA ECUACION PRINCIPAL</td></tr>
	<tr>
 	   <td align="center">
 	   	 Z = <input type="number" step="any" name="gananciaProducto1" id="gananciaProducto1"> X1 + <input type="number" step="any" 	name="gananciaProducto2" id="gananciaProducto2"> X2
 		</td>
 	 </tr>
 	 <tr> <td align="center">INGRESA ECUACION 1</td></tr>
 	 <tr>
 	 	<td align="center">
  	   	 <input type="number" step="any"  name="horasproducto1area1" id="horasproducto1area1"> X1 + <input type="number" step="any" name="horasproducto2area1" id="horasproducto2area1"> X2 <select name="signo1" id="signo1">
				<!--<option>></option>
				<option><</option>-->
				<option>≥</option>
				<option>≤</option>
			</select> <input type="number" step="any"  name="horasarea1" id="horasarea1">
 	 	</td>
 	 </tr>
  	 <tr> <td align="center">INGRESA ECUACION 2</td></tr>
  	 <tr>
 	 	<td align="center">
  	   	 <input type="number" step="any" name="horasproducto1area2" id="horasproducto1area2"> X1 + <input type="number" step="any" name="horasproducto2area2" id="horasproducto2area2"> X2 <select name="signo2" id="signo2">
				<!--<option>></option>
				<option><</option>-->
				<option>≥</option>
				<option>≤</option>
			</select> <input type="number" step="any" name="horasarea2" id="horasarea2">
 	 	</td>
 	 </tr>
    <tr> <td align="center"><br><h4>RESTRICCIONES</h4></td></tr>
 	 <tr>
 	 	<td align="center">
 	 	Xj <select name="res1signo" id="res1signo">
				<!--<option>></option>
				<option><</option>-->
				<option>≥</option>
				<!--<option>≤</option>-->
			</select> <input type="number" step="any"  step="any" name="res1" id="res1"></td>
 	 </tr>
  	 <tr>
 	 	<td align="center">
 	 	X1 <select name="res2" id="res2">
				<option>ENTERO</option>
				<!--<option>DECIMAL</option>-->
			</select> 
 	 </tr>
  	 <tr>
 	 	<td align="center">
 	 	X2 <select name="res3" id="res3">
				<option>ENTERO</option>
				<!--<option>DECIMAL</option>-->
			</select>
 	 </tr>
 	 <tr>
 	 	<td align="center">(En caso de que el problema sea minimizar) X1 + X2 <select name="signMin" id="signMin">
				<!--<option>></option>
				<option><</option>-->
				<option>≥</option>
				<!--<option>≤</option>-->
			</select> <input type="number" step="any" name="minimo" id="minimo"></td>
 	 </tr>
 	 <tr>
 	 		<td align="center">QUE BUSCAS DE EL PROBLEMA 
			<select name="tipo" id="tipo">
				<option>MAXIMIZAR</option>
				<option>MINIMIZAR</option>
			</select>
			</td>
 	 </tr>
 	  <tr>
	  <td align="center"><input type="submit" name ="enviar"  id="enviar" value ="solucionar"></td>
	  </tr>
	</table>
				<div id="graph"></div>

		<script src="codigoGrafica.js" charset="utf-8"></script>
	</form>
</body>
</html>



