<html>
    <head>
   <head>
     <title>solucion</title>
     <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico"/>
     <meta charset="utf-8">
	 <style>
			table{
				border:10px solid #990000 ;
				padding: 20px 50px;
				marging-top:100px;
			}
			body{
				background-color:#8991F4;
				text-align: center;
			}
		</style>
    </head>
    <body>
	<span>Punto 1:</span><br/>
	<span>Valor X:</span><input id="punto1X" value="01" /><br/>
	<span>Valor Y:</span><input id="punto2Y" value="01" /> <br/>
	
	<span>Punto 2:</span><br/>
	<span>Valor X:</span><input id="punto2X" value="01" /><br/>
	<span>Valor Y:</span><input id="punto2Y" value="01" /> <br/>
	
	<input type="button" name="Boton1" value="GRAFICAR" onclick="drawPoint()"/>
	
	<br/>
	<br/>
        <canvas id="canvasXZY" width="420px" height="420px" style="background: #fff;     magrin:20px;"></canvas>
        <script type="text/javascript" language="javascript">
    var bw = 400; 
    var bh = 400;
    var p = 10;
    var cw = bw + (p*2) + 1;
    var ch = bh + (p*2) + 1;

    var canvas = document.getElementById("canvasXZY");
    var context = canvas.getContext("2d");
    function drawBoard(){
	
		for (var x = 0; x <= bw; x += 40) {
			context.moveTo(0.5 + x + p, p);
			context.lineTo(0.5 + x + p, bh + p);
		}


		for (var x = 0; x <= bh; x += 40) {
			context.moveTo(p, 0.5 + x + p);
			context.lineTo(bw + p, 0.5 + x + p);
		}

		context.strokeStyle = "blue";
		context.stroke();
		

		

    }

    drawBoard();
	
	function drawPoint(){
	
		var x =  Math.random() * 100;
		var y = Math.random() * 100;
	
		//alert('hola' + x + y);
		
		context.moveTo(10 + x, 50 + x);
		context.lineTo(100+ y, 40 + y);
		
				context.strokeStyle = "black";
		context.stroke();
	}
    </script>
    </body>
    </html>