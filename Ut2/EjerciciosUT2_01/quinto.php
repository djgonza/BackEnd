<?php  
    define ("DESCUENTO", 25);
    define ("IVA", 21);
    $precioProducto = 234.89;
    $descuento = $precioProducto * (DESCUENTO / 100);
    $precioConDescuento = $precioProducto - $descuento;
    $iva = $precioProducto * (IVA / 100);
    $precioConIva = $precioProducto - $iva;
    $precioFinal = $precioConDescuento + $iva;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Primeros ejemplos con PHP</title>
    </head>
    <body>
        <div id="contenidoSegundo">
            <div id="cabecera"><h2>Primeros ejemplos PHP</h2></div>
            <div id="principal">
                <h3>Variables y tipos de datos</h3>
                <hr />
                <table>
                    <caption>Datos de producto</caption>
                    <tbody>
                        <tr>
                            <td>Precio Producto:</td>
                            <td><?php echo $precioProducto; ?></td>
                        </tr>
                        <tr>
                            <td>Descuento 25%:</td>
                            <td>
                                <?php echo $descuento; ?>                
                            </td>
                        </tr>
                        <tr>
                            <td>Precio con Descuento:</td>
                            <td><?php echo $precioConDescuento; ?></td>
                        </tr>
                        <tr>
                            <td>IVA 21%</td>
                            <td><?php echo $iva; ?></td>
                        </tr>
                        <tr>
                            <td>Precio Final:</td>
                            <td><?php echo $precioFinal; ?></td>
                        </tr>
                    </tbody>
                </table> 
                
            </div>
            <div id="pie">Desarrollo web en entorno servidor</div>
        </div>
    </body>
</html>
