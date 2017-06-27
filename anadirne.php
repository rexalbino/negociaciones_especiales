
<?php
require("connection.php");

session_start();
$user=$_SESSION['id'];
$sql2="SELECT * FROM `usuarios` WHERE `id_usuario`='$user'";
$resultado2 = mysqli_query($link,$sql2) ;
$row2 = mysqli_fetch_array($resultado2);
if (@!$_SESSION['user']) {
	header("Location:login.php");
} 


?>
<html>
    <head>
    <title>Insertando</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="img/man.ico" type="image/x-icon" > 
        
    </head>
      
    <body class="#000000 black">
        <?php
            
            $gupocliente='';
            $whofactures='';
            $folio='';
            $concecionario='';
            $nombre='';
            $Vigencipropu='';
            $descripcion='';

            //aqui estans las validaciones para saber si van a poner mas de una columna en la negociacion especial
            $val2='';
            $val3='';
            $val4='';
            $val5='';
            $val6='';


            //estos son mas datos para la negociacion especial
            $id_producto1='';// x7
            $id_producto2='';// x7
            $id_producto3='';// x7
            $id_producto4='';// x7
            $id_producto5='';// x7
            $id_producto6='';// x7
            $id_producto7='';// x7

            $precio_pro_actual1='';//x7
            $precio_pro_actual2='';//x7
            $precio_pro_actual3='';//x7
            $precio_pro_actual4='';//x7
            $precio_pro_actual5='';//x7
            $precio_pro_actual6='';//x7
            $precio_pro_actual7='';//x7
            
            $caracteristicaadi1='';//x7
            $caracteristicaadi2='';//x7
            $caracteristicaadi3='';//x7
            $caracteristicaadi4='';//x7
            $caracteristicaadi5='';//x7
            $caracteristicaadi6='';//x7
            $caracteristicaadi7='';//x7

            $id_carro1='';//x7
            $id_carro2='';//x7
            $id_carro3='';//x7
            $id_carro4='';//x7
            $id_carro5='';//x7
            $id_carro6='';//x7
            $id_carro7='';//x7

            $precio_carro_actual1='';//x7
            $precio_carro_actual2='';//x7
            $precio_carro_actual3='';//x7
            $precio_carro_actual4='';//x7
            $precio_carro_actual5='';//x7
            $precio_carro_actual6='';//x7
            $precio_carro_actual7='';//x7

            $segmento1='';//x7
            $segmento2='';//x7
            $segmento3='';//x7
            $segmento4='';//x7
            $segmento5='';//x7
            $segmento6='';//x7
            $segmento7='';//x7

            $anio_modelo1='';//x7
            $anio_modelo2='';//x7
            $anio_modelo3='';//x7
            $anio_modelo4='';//x7
            $anio_modelo5='';//x7
            $anio_modelo6='';//x7
            $anio_modelo7='';//x7

            $volumen_aparte1='';//x7
            $volumen_aparte2='';//x7
            $volumen_aparte3='';//x7
            $volumen_aparte4='';//x7
            $volumen_aparte5='';//x7
            $volumen_aparte6='';//x7
            $volumen_aparte7='';//x7

            $volumen_total='';//x1

            $tipo_moneda1='';//x7
            $tipo_moneda2='';//x7
            $tipo_moneda3='';//x7
            $tipo_moneda4='';//x7
            $tipo_moneda5='';//x7
            $tipo_moneda6='';//x7
            $tipo_moneda7='';//x7

            $precio_lista1='';//x7
            $precio_lista2='';//x7
            $precio_lista3='';//x7
            $precio_lista4='';//x7
            $precio_lista5='';//x7
            $precio_lista6='';//x7
            $precio_lista7='';//x7

            $precio_solicitado1='';//x7
            $precio_solicitado2='';//x7
            $precio_solicitado3='';//x7
            $precio_solicitado4='';//x7
            $precio_solicitado5='';//x7
            $precio_solicitado6='';//x7
            $precio_solicitado7='';//x7

            $descuentonumber1='';//x7
            $descuentonumber2='';//x7
            $descuentonumber3='';//x7
            $descuentonumber4='';//x7
            $descuentonumber5='';//x7
            $descuentonumber6='';//x7
            $descuentonumber7='';//x7
                
            $descuentopercent1='';//x7
            $descuentopercent2='';//x7
            $descuentopercent3='';//x7
            $descuentopercent4='';//x7
            $descuentopercent5='';//x7
            $descuentopercent6='';//x7
            $descuentopercent7='';//x7
                
            $datefac1='';//x7
            $datefac2='';//x7
            $datefac3='';//x7
            $datefac4='';//x7
            $datefac5='';//x7
            $datefac6='';//x7
            $datefac7='';//x7
                
            $aditional_floor1='';//x7
            $aditional_floor2='';//x7
            $aditional_floor3='';//x7
            $aditional_floor4='';//x7
            $aditional_floor5='';//x7
            $aditional_floor6='';//x7
            $aditional_floor7='';//x7

            $extendedguarr1='';//x7
            $extendedguarr2='';//x7
            $extendedguarr3='';//x7
            $extendedguarr4='';//x7
            $extendedguarr5='';//x7
            $extendedguarr6='';//x7
            $extendedguarr7='';//x7

            $moneybono1='';//x7
            $moneybono2='';//x7
            $moneybono3='';//x7
            $moneybono4='';//x7
            $moneybono5='';//x7
            $moneybono6='';//x7
            $moneybono7='';//x7

            $bonowhosale1='';//x7
            $bonowhosale2='';//x7
            $bonowhosale3='';//x7
            $bonowhosale4='';//x7
            $bonowhosale5='';//x7
            $bonowhosale6='';//x7
            $bonowhosale7='';//x7
                
            $bonoretail1='';//7
            $bonoretail2='';//7
            $bonoretail3='';//7
            $bonoretail4='';//7
            $bonoretail5='';//7
            $bonoretail6='';//7
            $bonoretail7='';//7

            $accesorio1='';//7
            $accesorio2='';//7
            $accesorio3='';//7
            $accesorio4='';//7
            $accesorio5='';//7
            $accesorio6='';//7
            $accesorio7='';//7

            $carro_another_config1='';//7
            $carro_another_config2='';//7
            $carro_another_config3='';//7
            $carro_another_config4='';//7
            $carro_another_config5='';//7
            $carro_another_config6='';//7
            $carro_another_config7='';//7

            $flete_destino1='';//7
            $flete_destino2='';//7
            $flete_destino3='';//7
            $flete_destino4='';//7
            $flete_destino5='';//7
            $flete_destino6='';//7
            $flete_destino7='';//7

            $flete_costo1='';//7
            $flete_costo2='';//7
            $flete_costo3='';//7
            $flete_costo4='';//7
            $flete_costo5='';//7
            $flete_costo6='';//7
            $flete_costo7='';//7

            $engancheprecio1='';//x7
            $engancheprecio2='';//x7
            $engancheprecio3='';//x7
            $engancheprecio4='';//x7
            $engancheprecio5='';//x7
            $engancheprecio6='';//x7
            $engancheprecio7='';//x7

            $enganchepercent1='';//x7
            $enganchepercent2='';//x7
            $enganchepercent3='';//x7
            $enganchepercent4='';//x7
            $enganchepercent5='';//x7
            $enganchepercent6='';//x7
            $enganchepercent7='';//x7

            $forma_amotizacion1='';//x7
            $forma_amotizacion2='';//x7
            $forma_amotizacion3='';//x7
            $forma_amotizacion4='';//x7
            $forma_amotizacion5='';//x7
            $forma_amotizacion6='';//x7
            $forma_amotizacion7='';//x7

            $plaso_pago1='';//x7
            $plaso_pago2='';//x7
            $plaso_pago3='';//x7
            $plaso_pago4='';//x7
            $plaso_pago5='';//x7
            $plaso_pago6='';//x7
            $plaso_pago7='';//x7

            $Precio_venta_final1='';//x7
            $Precio_venta_final2='';//x7
            $Precio_venta_final3='';//x7
            $Precio_venta_final4='';//x7
            $Precio_venta_final5='';//x7
            $Precio_venta_final6='';//x7
            $Precio_venta_final7='';//x7

            $end_date1='';//x7
            $end_date2='';//x7
            $end_date3='';//x7
            $end_date4='';//x7
            $end_date5='';//x7
            $end_date6='';//x7
            $end_date7='';//x7

            $carro_costo1='';//x7
            $carro_costo2='';//x7
            $carro_costo3='';//x7
            $carro_costo4='';//x7
            $carro_costo5='';//x7
            $carro_costo6='';//x7
            $carro_costo7='';//x7

            $acceso_costo1='';//x7
            $acceso_costo2='';//x7
            $acceso_costo3='';//x7
            $acceso_costo4='';//x7
            $acceso_costo5='';//x7
            $acceso_costo6='';//x7
            $acceso_costo7='';//x7

            $another_costo1='';//x7
            $another_costo2='';//x7
            $another_costo3='';//x7
            $another_costo4='';//x7
            $another_costo5='';//x7
            $another_costo6='';//x7
            $another_costo7='';//x7

            $comentario_controllin='';//x1

            
            
            $id_producto1=$_GET['busqueda'];// x7
            $precio_pro_actual1=$_GET['resultadobusqueda1'];//x7
            $caracteristicaadi1=$_GET['carca1'];//x7
            $id_carro1=$_GET['carroceria1'];//x7
            $precio_carro_actual1=$_GET['resultadoca'];//x7
            $segmento1=$_GET['segmento1'];//x7
            $anio_modelo1=$_GET['aniomodel1'];//x7
            $volumen_aparte1=$_GET['uno'];//x7
            $volumen_total=$_GET['total'];//x1
            $tipo_moneda1=$_GET['money1'];//x7
            $precio_lista1=$_GET['totalisimo'];//x7
            $precio_solicitado1=$_GET['psoli1'];//x7
            $descuentonumber1=$_GET['descu1'];//x7
            $descuentopercent1=$_GET['porciento1'];//x7
            $datefac1=$_GET['facturedate1'];//x7
            $aditional_floor1=$_GET['aditionalfloor1'];//x7
            $extendedguarr1=$_GET['extendg1'];//x7
            $moneybono1=$_GET['money8'];//x7
            $bonowhosale1=$_GET['bonowhosale1'];//x7
            $bonoretail1=$_GET['bonoretail'];//7
            $accesorio1=$_GET['costoacee1'];//7
            $carro_another_config1=$_GET['anotherconfig1'];//7
            $flete_destino1=$_GET['fletdest1'];//7
            $flete_costo1=$_GET['fletcosto1'];//7
            $engancheprecio1=$_GET['enganche1'];//x7
            $enganchepercent1=$_GET['engancheper1'];//x7
            $forma_amotizacion1=$_GET['amor7'];//x7
            $plaso_pago1=$_GET['pagom1'];//x7
            $Precio_venta_final1=$_GET['preciofinal1'];//x7
            $end_date1=$_GET['endate1'];//x7
            $carro_costo1=$_GET['carrocosto1'];//x7
            $acceso_costo1=$_GET['accesocosto1'];
            $another_costo1=$_GET['otrocosto1'];//x7
            $comentario_controllin=$_GET['testoim'];//x1

            $gupocliente=$_GET['grucli'];//aqui
            $whofactures=$_GET['whofacture'];
            $folio=$_GET['folio'];
            $concecionario=$_GET['concecionario'];//aqui
            $nombre=$_GET['quienes'];//aqui
            $Vigencipropu=$_GET['vigpro'];
            $descripcion=$_GET['descripcion'];



            
            
            
            

        
        
            if(empty($gupocliente) || empty($whofactures) || empty($folio) || empty($concecionario) || empty($nombre) || empty($Vigencipropu) || empty($descripcion)){
                echo "<script language=javaScript>alert('No se a podido cargar el articulo');</script>";
                
                echo "<h1 class='center-align #afb42b lime darken-2'>Algo salio mal</h1>";?>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
    <div class="center-align">
      <img src="img/sad.png">
        </div>
                
            <?php }else{
                $sql2="INSERT INTO `fact_camiones` (`id_pedido`, `comentario_user`, `id_producto`, `precio_proccc`, `adicional`, `id_carrocero`, `precio_carrr`, `id_segmento`, `anio`, `cantidad`, `volumen_total`, `id_moneda`, `precio_lista`, `precio_solicitado`, `descuento`, `descuento_precent`, `fecha_factura_mtb`, `piso_adicional`, `garantia_extendida`, `id_monedabono`, `bono_whosale`, `bono_retail`, `accesorios_costo`, `carroceria_otro`, `flete_destino`, `flete_costo`, `enganche_money`, `enganche_percent`, `forma_amortisacion`, `plazo_pago`, `precio_venta`, `fecha_facturacion_cliente`, `carroceria_costo`, `accesorios`, `otros_costos`, `id_who_facture`, `Comentario_controlling`, `folio`, `vigencia`, `aprovado`, `id_usuario`, `grupo_cliente`, `concecionarooi`, `Nombre`) VALUES (NULL, '$descripcion', '$id_producto1', '$precio_pro_actual1', '$caracteristicaadi1', '$id_carro1', '$precio_carro_actual1', '$segmento1', '$anio_modelo1', '$volumen_aparte1', '$volumen_total', '$tipo_moneda1', '$precio_lista1', '$precio_solicitado1', '$descuentonumber1', '$descuentopercent1', '$datefac1', '$aditional_floor1', '$extendedguarr1', '$moneybono1', '$bonowhosale1', '$bonoretail1', '$accesorio1', '$carro_another_config1', '$flete_destino1', '$flete_costo1', '$engancheprecio1', '$enganchepercent1', '$forma_amotizacion1', '$plaso_pago1', '$Precio_venta_final1', '$end_date1', '$carro_costo1', '$acceso_costo1', '$another_costo1', '$whofactures', '$comentario_controllin', '$folio', '$Vigencipropu', '0', '$user','$gupocliente','$$concecionario','$nombre');";
                mysqli_query($link,$sql2);
               // echo "<script language=javaScript>alert('Proveedor cargado exitosamente');</script>";
                
            
        
        echo "<h1 class='center-align #afb42b lime darken-2'>Añadiendo</h1>";
        ?>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
    <div class="center-align">
      <img src="img/PacMan.gif">
        </div>
        <?php } ?>
    </body>
            <?php
session_start();
$user=$_SESSION['user'];
$sql="SELECT * FROM usuario WHERE nombre_user='$user'";
$resultado = mysqli_query($link,$sql) ;
$row = mysqli_fetch_array($resultado);
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif($row['roll']==0){
    echo "<script language=javaScript>alert('Usted no puede entar aqui');</script>";
    header("Location:index.php");
}else{
    header("Refresh: 5; URL=admin.php");
}
        die();
    ?>
  </html>
?>