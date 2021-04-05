<?php
include "../cabecera.inc.php";

include "../conexion.inc.php";
//$resultado = mysqli_query($conex, "select * from usuario");
echo "<br>";

?>
<style type="text/css">
	.azul{
		background: #3D40B1;
	color: #FFFFFF;
	}
</style>
<div class="azul">
<h1>Azul</h1>
<table border="2px">
<tr>
	<td>CI</td>
	<td>Usuario</td>
	<td>Password</td>
	<td>Color</td>
</tr>
<?php
$ci        = $_GET["ci"];
$colorcito = "select * from usuario where ci='$ci'";
$r         = mysqli_query($conex, $colorcito);

while ($col = mysqli_fetch_array($r)) {
    echo "<tr>";
    echo "<td>$col[ci]</td>";
    echo "<td>" . $col["usuario"] . "</td>";
    echo "<td>$col[passwordd]</td>";
    echo "<td>$col[color]</td>";
}
?>
</table>
</div>
<?php
include "../pie.inc.php";
?>