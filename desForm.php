<!DOCTYPE html>
<html>
<head>
	<title>metodografico</title>
</head>
<body>
<?php
	if(isset ($_POST["enviar"])){

	   if(!strcasecmp("maximizar",$_POST["tipo"])){

			//if(!strcasecmp("1",$_POST["areas"])){
			//	include("formularios/formulario1.php");
			//}
			switch ($_POST["numRestricciones"]) {
				case '1':
					//	include("formulariosMaximizar/formulario1.php");
					break;
				case '2':
						//include("formulariosMaximizar/formulario2.php");
					break;
				case '3':
						include("forms/form2.php");
					break;					
				default:
						echo "Opcion no valida";
					break;
			}
		}
		/*if (!strcasecmp("minimizar",$_POST["tipo"])) {
				
			switch ($_POST["numRestricciones"]) {
			//	case '0':
			//			include("formulariosMinimizar/formulario0.php");
			//		break;

				case '1':
						include("formulariosMinimizar/formulario1.php");
					break;
				
				default:
						echo "Opcion no valida";
					break;
			}
		}*/
	}

?>
</body>
</html>