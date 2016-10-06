<!DOCTYPE HTML>

<style>
	h1 {
		text-align: center;
	}
	div.titulo{
		margin-left: 560px;
	}

	#calendario {
		border: 2px solid white;
		width: 100%;
		height: 500px;
		color: white;
		background: black;
	}
	
	#calendario tr {
		border: 2px solid white;
		text-align: center;

	}
	
	#calendario td {
		border: 2px solid white;
	}

	#calendario .hoy {
		background-color:blue;

	}



</style>

<html>
	<table id="calendario" cellspacing=0>
	<h1> Calendario </h1>
	<?php
		$d=1;
		$x=1;
		$mes=date("n");
		$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo"
		,"Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$anyo=date("Y");
		$b= date("w" ,mktime(0,0,0,$mes,1,$anyo));
		$ult = date("d",(mktime(0,0,0,$mes+1,1,$anyo)-1));
		$diaActual=date("j");



		echo "<div class=titulo>".$meses[$mes]." ".$anyo;"</div>";

		for($i=1;$i<=7;$i++){
			if($i==1)
				echo "<tr><td>Lunes</td><td>Martes</td>
				<td>Miercoles</td><td>Jueves</td><td>Viernes</td>
				<td>Sabado</td><td>Domingo</td>
				</tr>";
			
			else {
				echo "<tr>";
				for($l=1;$l<=7;$l++) {
						if($x<$b){
							echo "<td class'vacio'> </td>\n";
							
						}
						else if($d<=$ult){
							if($d==$diaActual){
								echo "<td class='hoy'>$d</td>\n";
								$d++;
							}
							else{
								echo "<td>$d</td>\n";
								$d++;
							}
						}
						$x++;

						
				}
				echo "</tr>";
			}
		}



	

	?>
	</table>
</html>
