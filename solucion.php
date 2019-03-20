<!DOCTYPE html>
<html>
<head>
	<title>solucion</title>
</head>
<body>
<?php
	//echo "si se creo el objeto de maximizar";


	if(isset ($_POST["enviar"])){

	   if(!strcasecmp("maximizar",$_POST["tipo"])){
			include("codigophp.php");
			//$operacion->datosDeOperacion1 //($_POST["producto1"],$_POST["ganancias1"],$_POST["producto2"],$_POST["ganancias2"],$_POST["areas"])
			//$fallo1=$_POST["maxima1"];
			//$fallo2=$_POST["area1"];
	
			/*alert("Has ingresado un valor no numerico en un campo de texto");
			echo "<script type=''>
			alert('Has ingresado un valor numerico en un campo de texto');
			</script>"; 
			include("formulariosMaximizar/formulario2.php");*/

			$operacion=new maximizar($_POST["nombre"],$_POST["producto1"],$_POST["gananciaProducto1"],$_POST["producto2"],
			$_POST["gananciaProducto2"]/*,$_POST["minima1"],$_POST["minima2"],$_POST["maxima1"],$_POST["maxima2"]*/);
			//$operacion->yuslin();
			$operacion->set1Area($_POST["horasarea1"]);
			$operacion->set2Area($_POST["horasarea2"]);
			$operacion->tiemposProduccion2($_POST["horasproducto1area1"],$_POST["horasproducto1area2"],$_POST["horasproducto2area1"],$_POST["horasproducto2area2"]);

			//$operacion->desplegarProductosyGanancias2();
			$operacion->solucion2();
			//$operacion->factorizacion();		


		}
		if (!strcasecmp("minimizar",$_POST["tipo"])) {
			include("codigophp.php");

			$operation=new minimizar($_POST["nombre"],$_POST["producto1"],$_POST["producto2"],$_POST["horasproducto1area1"],$_POST["horasproducto1area2"],$_POST["horasproducto2area1"],$_POST["horasproducto2area2"],$_POST["gananciaProducto1"],$_POST["gananciaProducto2"],$_POST["signo1"],$_POST["signo2"],$_POST["minimo"],$_POST["horasarea1"],$_POST["horasarea2"]);

			//$operation->yuslin();

			//$operation->desplegarInfo();	
			$operation->solucion();






			echo "jesus david";
		}
	}

?>
</body>
</html>