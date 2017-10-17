<?php
	$Inicial = $_POST['nInicial'];
	$Final = $_POST['nFinal'];
	$mInicial = $_POST['mInicial'];
	$mFinal = $_POST['mFinal'];
	$contador = 0;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Tabuada - Luiz Miguel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			table {
				float: left;
				text-align:center;
				margin-right: 50px;
			}
			</style>

		</head>
	<body>

		<h1 align="center">Tabuada Automática</h1>

		<?php
			for ($i=$Inicial; $i <= $Final; $i++) { 
			$contador++;
			echo "<table border='1'  align='center' style='width:10%; height:5%;'>";
			echo "<thead bgcolor='orange'>";
			echo "<th colspan=2>";
			echo "Tabela " . $contador;
			echo "</th>";
			echo "<tr>";
			echo "<th>";
			echo "Fórmula";
			echo "</th>";
			echo "<th>";
			echo "Valor";
			echo "</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			
			for ($y=$mInicial; $y <= $mFinal; $y++){	
			echo "<tr>";
					echo "<td>";
					echo  $i . " x " . $y . " = "; 
					echo "</td>";
					echo "<td>";
					echo  ($i * $y) . "<br>"; 
					echo "</td>";
			echo "</tr>";
			}
			
			echo "</tbody>";
			echo "</table>";	
			}
		?>

	</body>
</html>