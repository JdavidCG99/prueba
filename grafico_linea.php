<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include ("jpgraph/jpgraph.php"); 
include ("jpgraph/jpgraph_line.php"); 
//include ("jpgraph/jpg-config.inc.php");
//include ("jpgraph/jpgraph_gradient.php");
// Some data 
/**
 * 
 */
class grafica
{
	$ydata = array(11,3,8); 
	
 function grafica($a,$b,$c){
 	$this->$array[0]=$a;
 	$this->$array[1]=$b;
 	$this->$array[2]=$c;
 }
// Create the graph. These two calls are always required 
$graph = new Graph(450,250,"auto");	
$graph->SetScale("textlin"); 
$graph->img->SetAntiAliasing(); 
$graph->xgrid->Show(); 

// Create the linear plot 
$lineplot=new LinePlot($ydata); 
$lineplot->SetColor("black"); 
$lineplot->SetWeight(2); 
$lineplot->SetLegend("Horas"); 

// Setup margin and titles 
$graph->img->SetMargin(40,20,20,40); 
$graph->title->Set("Ejemplo: Horas de Trabajo"); 
$graph->xaxis->title->Set("Días"); 
$graph->yaxis->title->Set("Horas de Trabajo"); 
$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#F9BB64@0.5'); 
//$graph->SetShadow(); 

// Add the plot to the graph 
$graph->Add($lineplot); 

// Display the graph 
$graph->Stroke(); 
}

?>
</body>
</html>