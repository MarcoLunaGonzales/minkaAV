<?php
echo "<script language='Javascript'>
	function validar(f)
	{
		if(f.tipo_salida.value=='')
		{	alert('El campo Nombre de Tipo de Salida esta vacio.');
			f.tipo_salida.focus();
			return(false);
		}
		f.submit();
	}
	</script>";
require("conexion.inc");
require("estilos_administracion.inc");
echo "<form action='guarda_tipossalida.php' method='post'>";
echo "<center><table border='0' class='textotit'><tr><td>Adicionar Tipos de Salida</td></tr></table></center><br>";
echo "<center><table border='1' class='texto' cellspacing='0'>";
echo "<tr><th align='left'>Nombre Tipo de Salida</th>";
echo "<td align='center'><input type='text' class='texto' name='tipo_salida' size='40' onKeyUp='javascript:this.value=this.value.toUpperCase();'></td></tr>";
echo "<tr><th align='left'>Definición Tipos de Salida</th>";
echo "<td align='center'><textarea class='texto' name='obs_tipo_salida' cols='40' rows='5'></textarea></td></tr>";
echo "<tr><th>Tipo de Almacen</th><td><select name='tipo_almacen' class='texto'>
<option value='1'>Almacen Central</option>
<option value='2'>Almacen Regional</option>
</select></td>";
echo "</tr>";
echo "</table><br>";
echo"\n<table align='center'><tr><td><a href='navegador_tipossalida.php'><img  border='0'src='imagenes/volver.gif' width='15' height='8'>Volver Atras</a></td></tr></table>";
echo "<input type='button' class='boton' value='Guardar' onClick='validar(this.form)'></center>";
echo "</form>";
?>