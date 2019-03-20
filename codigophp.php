<!DOCTYPE html>
<html>
<head>
	<title>solucion</title>
</head>
<body>
<?php
 class maximizar {
 	private $nombre;
	private $producto1;
	private $gananciaProducto1;
	private $producto2;
	private $gananciaProducto2;
	private $minimoProducto1;
	private $minimoProducto2;
	private $maximoProducto1;
	private $maximoProducto2;
    private $area1,$area2,$area3,$area4,$area5,$area6,$area7,$area8,$area9,$area10;
    private $hora1,$hora2,$hora3,$hora4,$hora5,$hora6,$hora7,$hora8,$hora9,$hora10;

    private $tiempoProducto1area1,$tiempoProducto1area2,$tiempoProducto2area1,$tiempoProducto2area2;
	function maximizar($nombre,$producto1,$gananciaProducto1,$producto2,$gananciaProducto2/*,$minimoProducto1,$minimoProducto2,$maximoProducto1,$maximoProducto2*/){
		$this->nombre=$nombre;
		$this->producto1=$producto1;
		$this->gananciaProducto1=$gananciaProducto1;
		$this->producto2=$producto2;
		$this->gananciaProducto2=$gananciaProducto2;
	}
	function tiemposProduccion2($p11,$p12,$p21,$p22){
		$this->tiempoProducto1area1=$p11;
		$this->tiempoProducto1area2=$p12;
		$this->tiempoProducto2area1=$p21;
		$this->tiempoProducto2area2=$p22;
	}
	function set1area($horas){
		$this->hora1=$horas;
	}
	function set2area($horas){
		$this->hora2=$horas;
	}
	/*function yuslin(){
		echo "si se creo el objeto" . "<br>";
	}*/
	function desplegarProductosyGanancias2(){
		echo "Nombre del producto 1 : " . $this->producto1 . "<br>";
		echo "Ganancia del producto 1 : " . $this->gananciaProducto1 . "<br>";
		echo "Nombre del producto 2 : " . $this->producto2 . "<br>";
		echo "Ganancia del producto 2 : " . $this->gananciaProducto2 . "<br>";
		echo "Nombre area 1 : " . $this->area1 . "<br>";
		echo "Horas disponibles : " . $this->hora1 . "<br>";
		echo "Nombre area 2 : " . $this->area2 . "<br>";
		echo "Horas disponibles : " . $this->hora2 . "<br>";
	}
	private $factorizacion;
	private $puntoInterceptox3;
	private $puntoInterceptoy3;
	private $resultadoEcuacionpunto1;
	private $resultadoEcuacionpunto2;
	private $resultadoEcuacionpunto3;
	private $resultadoEcuacionpunto4;
	private $resultadoEcuacionpunto5;

	function solucion2(){
		$rectax1=$this->hora1/$this->tiempoProducto1area1;//se crea el punto x1 de la primer ecuacion ($rectax1,0)
		$rectay1=$this->hora1/$this->tiempoProducto2area1;//se crea el punto y1 de la primer ecuacion (0,$rectay1)

		$rectax2=$this->hora2/$this->tiempoProducto1area2;//se crea el punto x2 de la primer ecuacion ($rectax2,0)
		$rectay2=$this->hora2/$this->tiempoProducto2area2;//se crea el punto x2 de la primer ecuacion (0,$rectay2)
		//se encuentra el numero que factoriza la ecuacion 2 para allar x en el itercepto de las 2 rectas
		for ($i=$this->tiempoProducto2area1-$this->tiempoProducto2area1*2; $i <= $this->tiempoProducto2area1 ; $i++) { 
			if (($i*$this->tiempoProducto2area2)+($this->tiempoProducto2area1)==0) {
				if ($i!=0) {
						$this->factorizacion=$i;
				}
			}
		}

		//encontrando x3
		$a=($this->factorizacion*$this->hora2)+($this->hora1);
		$b=($this->factorizacion*$this->tiempoProducto1area2)+($this->tiempoProducto1area1);
		//asiganando valor a x3
		$this->puntoInterceptox3=$a/$b;
		if ($this->puntoInterceptox3 < 0) {
			//en caso de que el numero sea negativo lo multiplica por -1 para volverlo positivo
			$this->puntoInterceptox3=$this->puntoInterceptox3*-1;
		}

		//sustitucion de x para allar  y3
		$multi=($this->tiempoProducto1area1*$this->puntoInterceptox3);
		$resta=$this->hora1-$multi;
		//asignando valor a y3
		$this->puntoInterceptoy3=$resta/$this->tiempoProducto2area1;

		//verificando que se cumplan las restricciones y resolviendo lo que genera cada punto
		if ($this->tiempoProducto1area1*$rectax1 < $this->hora1 && $this->tiempoProducto1area2*$rectax1 < $this->hora2 ){
			//(rectax1,0)
			$this->resultadoEcuacionpunto1=$this->gananciaProducto1*$rectax1;//arroja producto1 y 0 del 2
		}
		if ($this->tiempoProducto2area1*$rectay1 < $this->hora1 && $this->tiempoProducto2area2*$rectay1 < $this->hora2) {
			//(0,rectay1)
			$this->resultadoEcuacionpunto2=$this->gananciaProducto2*$rectay1;//arroja proucto 2 y 0 del 1			
		}
		if($this->tiempoProducto1area1*$rectax2 < $this->hora1 && $this->tiempoProducto1area2*$rectax2 < $this->hora2){
			//(rectax2,0)
			$this->resultadoEcuacionpunto3=$this->gananciaProducto1*$rectax2;//arroja producto1 y 0 del 2
		}
		if ($this->tiempoProducto2area1*$rectay2 < $this->hora1 && $this->tiempoProducto2area2*$rectay2 < $this->hora2) {
			//(o,rectax2)
			$this->resultadoEcuacionpunto4=$this->gananciaProducto2*$rectay2;//arroja producto2 y 0 del 1
		}
		if($this->tiempoProducto1area1*$this->puntoInterceptox3+$this->tiempoProducto1area2*$this->puntoInterceptoy3<$this->hora1 && $this->tiempoProducto2area1*$this->puntoInterceptox3+$this->tiempoProducto2area2*$this->puntoInterceptoy3<$this->hora1 ){
			//(puntointerceptox3,puntointerceptoy3)
			$this->resultadoEcuacionpunto5=$this->gananciaProducto1*$this->puntoInterceptox3+$this->gananciaProducto2*$this->puntoInterceptoy3;
		}
		//se empiezan a comparar cada punto para ver cual es el mayor 
		if ($this->resultadoEcuacionpunto1>$this->resultadoEcuacionpunto2 && $this->resultadoEcuacionpunto1>$this->resultadoEcuacionpunto3 && $this->resultadoEcuacionpunto1>$this->resultadoEcuacionpunto4 && $this->resultadoEcuacionpunto1>$this->resultadoEcuacionpunto5) {
			echo "<h2 align='center'>SOLUCION DEL PROBLEMA CON LOS DATOS INGRESADOS</h2>"."<br><br>".
			"Evaluando estas ecuaciones por medio del metodo grafico y tomando en cuenta cada uno de los puntos producidos
			 <br> 
			se concluye que la mayor ganancia se da produciendo : <br>" .
			$rectax2 . " " . $this->producto1  . "<br>" .
			"0" . " " . $this->producto2;


		}elseif ($this->resultadoEcuacionpunto2>$this->resultadoEcuacionpunto3 && $this->resultadoEcuacionpunto2>$this->resultadoEcuacionpunto4 && $this->resultadoEcuacionpunto2>$this->resultadoEcuacionpunto5) {
			echo "<h2 align='center'>SOLUCION DEL PROBLEMA CON LOS DATOS INGRESADOS</h2>"."<br><br>".
			"Evaluando estas ecuaciones por medio del metodo grafico y tomando en cuenta cada uno de los puntos producidos
			 <br> 
			se concluye que la mayor ganancia se da produciendo : <br>" .
			"0" . " " . $this->producto1  . "<br>" .
			$rectay1 . " " . $this->producto2;			


		}elseif ($this->resultadoEcuacionpunto3>$this->resultadoEcuacionpunto4 && $this->resultadoEcuacionpunto3>$this->resultadoEcuacionpunto5) {		
			echo "<h2 align='center'>SOLUCION DEL PROBLEMA CON LOS DATOS INGRESADOS</h2>"."<br><br>".
			"Evaluando estas ecuaciones por medio del metodo grafico y tomando en cuenta cada uno de los puntos producidos
			 <br> 
			se concluye que la mayor ganancia se da produciendo : <br>" .
			$rectax2 . " " . $this->producto1  . "<br>" .
			"0" . " " . $this->producto2;

		}elseif ($this->resultadoEcuacionpunto4>$this->resultadoEcuacionpunto5) {
		
			echo "<h2 align='center'>SOLUCION DEL PROBLEMA CON LOS DATOS INGRESADOS</h2>"."<br><br>"
			. "Xj >= 0 para j=1,2 <br> X1-->Entero <br> X2-->Entero <br><br>".
			"Evaluando estas ecuaciones por medio del metodo grafico y tomando en cuenta cada uno de los puntos producidos
			 <br> 
			se concluye que la mayor ganancia se da produciendo : <br>" .
			"0" . " " . $this->producto1  . "<br>" .
			$rectay2 . " " . $this->producto2;

		}else{
			echo "<h2 align='center'>SOLUCION DEL PROBLEMA CON LOS DATOS INGRESADOS</h2>"."<br><br>".
			"Evaluando estas ecuaciones por medio del metodo grafico y tomando en cuenta cada uno de los puntos producidos
			 <br> 
			se concluye que la mayor ganancia se da produciendo : <br>" .
			$this->puntoInterceptox3 . " " . $this->producto1  . "<br>" .
			$this->puntoInterceptoy3 . " " . $this->producto2 . "<br><br><br>" /*. '<a href="https://www.geogebra.org/graphing" target="aaaaa"><h3>IR A UN GRAFICADOR</h3></a>'*/;
			//include("grafica.php");
			//echo "<img src='grafico_linea.php' alt='' border='0'>";
		}
	}
}

class minimizar{
	private $nombre;
	private $producto1;
	private $producto2;
	private $alimento1aporte1;
	private $alimento1aporte2;
	private $alimento2aporte1;
	private $alimento2aporte2;
	private $costoProducto1;
	private $costoProducto2;
	private $signoEcuacion1;
	private $signoEcuacion2;
	private $minimo;
	private $aporte1;
	private $aporte2;

	function minimizar($nombre,$producto1,$producto2,$alimento1aporte1,$alimento1aporte2,$alimento2aporte1,$alimento2aporte2,$costoProducto1,$costoProducto2,$signoEcuacion1,$signoEcuacion2,$minimo,$aporte1,$aporte2){
		$this->nombre=$nombre;
		$this->producto1=$producto1;
		$this->producto2=$producto2;
		$this->alimento1aporte1=$alimento1aporte1;
		$this->alimento1aporte2=$alimento1aporte2;
		$this->alimento2aporte1=$alimento2aporte1;
		$this->alimento2aporte2=$alimento2aporte2;
		$this->costoProducto1=$costoProducto1;
		$this->costoProducto2=$costoProducto2;
		$this->signoEcuacion1=$signoEcuacion1;
		$this->signoEcuacion2=$signoEcuacion2;
		$this->minimo=$minimo;
		$this->aporte1=$aporte1;
		$this->aporte2=$aporte2;
	}

	/*function yuslin(){
		echo "Si se guardaron los datos";
	}*/

	function desplegarInfo(){
		echo "Nombre : " . $this->nombre . "<br>";
		echo "Nombre producto 1 : " . $this->producto1 . "<br>";
		echo "Nombre producto2 : " . $this->producto2 . "<br>";
		echo "alimento 1 aporte 1 : " . $this->alimento1aporte1 . "<br>";		
		echo "alimento 1 aporte 2 " . $this->alimento1aporte2 . "<br>";		
		echo "alimento 2 aporte 1 " . $this->alimento2aporte1 . "<br>";		
		echo "alimento 2 aporte 2 " . $this->alimento2aporte2 . "<br>";		
		echo "Costo producto 1 : " . $this->costoProducto1 . "<br>";
		echo "costoProducto2 : " . $this->costoProducto2 . "<br>";
		echo "signoEcuacion1 " . $this->signoEcuacion1 . "<br>";
		echo "signoEcuacion2 " . $this->signoEcuacion2 . "<br>";
		echo "minimo " . $this->minimo . "<br>";
		echo "aporte 1 " . $this->aporte1 . "<br>";
		echo "aporte 2 " . $this->aporte2 . "<br>";
	}
	private $res1part1;
	private $res1part2;
	private $res2part1;
	private $res2part2;
	private $punto1;
	private $punto2;
	private $punto3;
	private $punto4;
	private $punto5;
	function solucion(){
		if($this->signoEcuacion1=="≥"){
			$this->res1part1=$this->aporte1-$this->alimento1aporte1;
			if($this->res1part1<0){
				$this->res1part1=$this->res1part1*-1;
			}
			$this->res1part2=$this->alimento2aporte1-$this->aporte1;
			if ($this->res1part2<0) {
				$this->res1part2=$this->res1part2*-1;
			}
		}elseif ($this->signoEcuacion1=="≤") {
			$this->res1part1=$this->alimento1aporte1+$this->aporte1;
			if($this->res1part1<0){
				$this->res1part1=$this->res1part1*-1;
			}
			$this->res1part2=$this->alimento2aporte1-$this->aporte1;
			if ($this->res1part2<0) {
				$this->res1part2=$this->res1part2*-1;
			}

		}
		if($this->signoEcuacion2=="≥"){
			$this->res2part1=$this->aporte2-$this->alimento1aporte2;
			if($this->res2part1<0){
				$this->res2part1=$this->res2part1*-1;
			}
			$this->res2part2=$this->alimento2aporte2-$this->aporte2;
			if ($this->res2part2<0) {
				$this->res2part2=$this->res2part2*-1;
			}
		}elseif ($this->signoEcuacion2=="≤") {
			$this->res2part1=$this->aporte2-$this->alimento1aporte2;
			if($this->res2part1<0){
				$this->res2part1=$this->res2part1*-1;
			}
			$this->res2part2=$this->alimento2aporte2-$this->aporte2;
			if ($this->res2part2<0) {
				$this->res2part2=$this->res2part2*-1;
			}

		}
		/*echo "<br> rest1part1 " . $this->res1part1 . "<br>";
		echo "rest 1 part 2 " . $this->res1part2 . "<br>";
		echo "<br> rest 2 part1 " . $this->res2part1 . "<br>";
		echo "rest 2 part 2 " . $this->res2part2 . "<br>";*/
		$x11=$this->minimo;
		$y11=$this->minimo;

		$x22=$this->minimo/2;
		$pas1=$this->res1part1*$x22;
		$pas2=$pas1*-1;
		$y22=$pas2/$this->res1part2;
		if ($y22<0) {
			$y22=$y22*-1;
		}

		$x33=$this->minimo/4;
		$pass1=$this->res2part1*$x33;
		$pass2=$pass1*-1;
		$y33=$pass1/$this->res2part2;

		$newMinimo=$this->minimo*$this->res1part2;
		if ($newMinimo < 0) {
			$newMinimo = $newMinimo*-1;
		}

		$pas144=$this->res1part1+$this->res1part2;
		if ($pas144 < 0) {
			$pas144=$pas144*-1;
		}
		$x44=$newMinimo/$pas144;
		$y44=$this->minimo-$x44;
		//$x44=470.5;
		//$y44=329.5;
		/*echo "x11 " . $x11 . "<br>";
		echo "y11 " . $y11 . "<br>";
		echo "x22 " . $x22 . " y22 " . $y22 . "<br>";
 		echo "x33 " . $x33 . " y33 " . $y33 . "<br>";
		echo "x44 " . $x44 . " y44 " . $y44 . "<br>";*/
	
 		/*if($x11 >= $this->minimo){
 			$this->punto1=$this->costoProducto1*$x11;
 		}
 		if ($y11 >= $this->minimo) {
 			$this->punto2=$this->costoProducto2*$y11;
 		}*/
 		if($x22 + $y22 >= $this->minimo){
 			$this->punto3=$this->costoProducto1*$x22 + $this->costoProducto2*$y22;
 		}
 		if ($x33 + $y33 >= $this->minimo) {
 			$this->punto4=$this->costoProducto1*$x33 + $this->costoProducto2*$y33;
 		}
 		if ($x44 + $y44 >= $this->minimo) {
 			$this->punto5=$this->costoProducto1*$x44 + $this->costoProducto2*$y44;
 		}
 		/*echo "punto 3 " . $this->punto3 . "<br>";
 		echo "punto 4 " . $this->punto4 . "<br>";
 		echo "punto 5 " . $this->punto5 . "<br>";*/

		if ($this->punto3 < $this->punto4 && $this->punto3 < $this->punto5 && $this->punto3 > 0) {
 			# code...
 		}elseif ($this->punto4 < $this->punto5 && $this->punto4 > 0) {
 			# code...

 		}elseif ($this->punto5 > 0) {
 			# code...
 			//echo "x1 mas factible es " . $x44 . "<br>";
 			//echo "x2 mas factible es " . $y44 . "<br>";
 			echo "<h2>SOLUCION DE EL PROBLEMA</h2> <br>".
 			"Dado los datos de " . $this->nombre . " " . " se concluye que : <br>" .
 			"con " . $x44 . " unidades de " . $this->producto1 . " y <br>" .
 			$y44 . " unidades de " . $this->producto2 . " se satisfacen las necesidades con un costo minimo<br><br>";
 			//include("grafica.php");
 		}
 		 	/*echo "x1 mas factible es " . $x44 . "<br>";
 			echo "x2 mas factible es " . $y44 . "<br>";
 			echo "punto 5 " . $this->punto5;*/
	}
}
?>
</body>
</html>