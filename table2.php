<?php
    require("connection.php");
            

    $id=$_GET['id'];
    $sql="
        SELECT `id_pedido`, `adicional`, `anio`, `cantidad`, `volumen_total`, `precio_lista`, `precio_solicitado`, `descuento`, `descuento_precent`, `fecha_factura_mtb`, `piso_adicional`, `garantia_extendida`, `bono_whosale`, `bono_retail`, `accesorios_costo`, `carroceria_otro`, `flete_destino`, `flete_costo`, `enganche_money`, `enganche_percent`, `forma_amortisacion`, `plazo_pago`, `precio_venta`, `fecha_facturacion_cliente`, `carroceria_costo`, `accesorios`, `otros_costos`, `folio`, `vigencia`,producto.des_producto, carroceria.des_carrocero, segmento.des_segmento,moneda.des_moneda, who_facture.des_who_facture,usuarios.nombre,usuarios.apellido_p,usuarios.apellido_m,usuarios.grupo,concecion.des_concecion,usuarios.id_usuario,aprovado   FROM fact_camiones 
            LEFT JOIN producto on producto.id_producto = fact_camiones.id_producto
            JOIN carroceria on carroceria.id_carrocero = fact_camiones.id_carrocero 
            JOIN segmento ON segmento.id_segmento = fact_camiones.id_segmento
            JOIN moneda ON moneda.id_moneda = fact_camiones.id_moneda
            JOIN who_facture on who_facture.id_who_facture = fact_camiones.id_who_facture
            JOIN usuarios ON usuarios.id_usuario = fact_camiones.id_usuario
            JOIN concecion ON usuarios.id_concecion = concecion.id_concerionario
        ";
      $resultado = mysqli_query($link,$sql) or die(mysql_error());

    echo 'Mira lo que encontre'. $id;
?>
<html>
    <head>
        <title>Negociaciones especiales</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<table>
    <tbody>
        <tr>
            
            <td>Grupo/cliente <input type="text"> </td>
            <td>Facturacion dealer o directo cliente <input type="text"></td>
            <td>Folio(N° NE) <input type="text"></td>
        </tr>
        <tr>
            <td>Concesionario <input type="text"></td>
            <td>.<input type="text"></td>
            <td>Vigencia de propuesta <input type="text"></td>
        </tr>
</tbody>
</table>
<table>
    <tbody>
        <tr>
            <td>Explique brevemente la importancia de aprovar esta negociacion:</td>
        </tr><tr>
            <td><input type="text"></td>
        </tr>

    </tbody>
</table>
<table>
    <tbody>
        <tr>
            <th>Datos generales del producto</th>
            <th>Tipo 1</th>
            <th>Tipo 2</th>
            <th>Tipo 3</th>
            <th>Tipo 4</th>
            <th>Tipo 5</th>
            <th>Tipo 6</th>
            <th>Tipo 7</th>
        </tr>
        <tr>
            <td>Nombre del producto</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Caracteristica adicional</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Carroceria de linea (Plan carrocero)</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Segmento (carga/pasaje)</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Año modelo</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
    </tbody>
</table>
        <div class="#263238 blue-grey darken-4">
                    <p class="white-text">Detalle de la operacion:</p>
                </div>
        <table>
    <tbody>
        
        <tr>
            <td>Volumen (cantidad de unidades)</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Volumen total</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Moneda de calculo</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Precio lista</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Precio Solicitado</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Descuente - $</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Descuento - %</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Fecha de facturacion MTB</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <th>Otros beneficios solicitados</th>
        </tr>
    </tbody>
</table>
<table>
    <tbody>
        
        <tr>
            <td>Plan piso adicional</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Garantia extendida</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Moneda de calculo bono</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Bono Whosale</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Bono Retail</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Accesorio - costo</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Carroceria - otra conf.</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Fletes-destino</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Fletes-costo</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <th>Financiamiento directo MTB</th>
    </tbody>
</table>
<table>
    <tbody>
        
        <tr>
            <td>Enganche $</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Enganche %</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Forma de autorización</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Plaso de pago o mensualidades</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
    </tbody>
</table>
        <div class="#263238 blue-grey darken-4">
                    <p class="white-text">Operación del Concesionario</p>
                </div>
<table>
    <tbody>
        
        <tr>
            <th>Datos generales</th>
        </tr>
        <tr>
            <td>Precio de venta al cliente final</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Fecha de fact cliente final</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
    </tbody>
</table>
<table>
    <tbody>
        
        <tr>
            <th>Costos adicionales</th>
        </tr>
        <tr>
            <td>Carroceria - costo</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Accesorios - costo</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>otros costos</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <th>Comentarios Controlling Prices</th>
        </tr>
    </tbody>
</table>
<table>
    <tbody>
        <tr cols=50>
            <textarea disabled >
                Precio aprobado:

                    13x 9.150 FEB MY2018 Hidromex.
                    Precio al stock del Concesionario = 954,967 MXP más IVA.
                    Precio sugerido al Cliente final = 979,453 MXP más IVA.
                    *Incluye 60 días de gracia en plan piso.

                    Condiciones de aprobación:

                    Se autoriza precio de venta al Cliente final, para facturación de marzo 2017.
                    Las unidades facturadas bajo estas condiciones no deberán contar para el pago de bonos por política variable de ventas, acciones de venta, ni apoyos demo.
                    Toda la información proporcionada por Ventas para aprobación de esta NE deberá ser auditable.

            </textarea>
        </tr>
    </tbody>
</table>
<table class="#263238 blue-grey darken-4">
    <tbody>
        <tr>
            <td class="white-text">Fecha de revicion:</td>
            <td class="white-text">Todays date</td>
            <td class="white-text" align="left"S>Solicitud para la negociacion especial(NE) version 2017.8</td>
        </tr>

        </tbody>
</table>
      </body>
</html>