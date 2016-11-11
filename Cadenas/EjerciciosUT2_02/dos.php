<?php include 'includes/cabecera.php'; ?>
<?php 
	define("KW", 0.11473);
	define("IVA", 21);
	$consumo = 22;
	$totalSin = $consumo * KW;
	$iva = $totalSin * (IVA / 100);
	$total = $totalSin + $iva;
?>

<div id="principal">
	<h4>Factura de la luz</h4>
	<hr />
	<table>
		<caption>Factura Luz</caption>
		<tbody>
			<tr>
				<td>Consumo</td>
				<td><?php echo $consumo; ?> KW</td>
			</tr>
			<tr>
				<td>Precio KW</td>
				<td><?php echo KW; ?>€</td>
			</tr>
			<tr>
				<td>Total sin IVA</td>
				<td><?php echo number_format($totalSin, 2); ?> €</td>
			</tr>
			<tr>
				<td>IVA (21%)</td>
				<td><?php echo number_format($iva, 2); ?> €</td>
			</tr>
			<tr>
				<td>Total Factura</td>
				<td><?php echo number_format($total, 2); ?> €</td>
			</tr>
		</tbody>
	</table>
</div>
<?php include 'includes/pie.php'; ?>