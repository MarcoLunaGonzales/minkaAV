<?php

	require("conexion.inc");
	require("estilos_almacenes.inc");
	$sql="select cod_ciudad,descripcion from ciudades order by descripcion";
	$resp=mysql_query($sql);
	echo "<h1>Registro General de Funcionarios</h1>";
	echo "<center><table class='texto'>";
	echo "<tr><th>Territorio</th></tr>";
	while($dat=mysql_fetch_array($resp))
	{
		$p_cod_ciudad=$dat[0];
		$p_agencia=$dat[1];
		echo "<tr><td><a href='navegador_funcionarios.php?cod_ciudad=$p_cod_ciudad'>$p_agencia</a></td></tr>";
	}
	echo "</table></center>";
	echo "<br>";

?>