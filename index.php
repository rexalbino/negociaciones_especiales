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
      <!--Import Google Icon Font-->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Negociaciones especiales</title>
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
      <?php
        require("connection.php");
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
      ?>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Negociacion especial</a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="tab"><a href="addne.php">Agregar nueva NE</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="tab"><a href="addne.php">Agregar nueva NE</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#new">Mis NE</a></li>
        <li class="tab"><a href="#aprove">NE por aprobar</a></li>
      </ul>
    </div>
  </nav>
        <ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="img/realback.jpg">
      </div>
      <a href="#!user"><img class="circle" src="img/user.png"></a>
      <a href="#!name"><span class="white-text name"><?php echo $row2['nombre'].' '.$row2['apellido_p'].' '.$row2['apellido_m']  ?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $row2['correo'] ?></span></a>
    </div></li>
    <li><div class="divider"></div></li>
    <li><a href="close.php"><i class="material-icons left">person_pin</i>Cerrar sesion</a></li>
  </ul>
        <div class="fixed-action-btn">
 <a href="#" data-activates="slide-out" class="btn-floating btn-large waves-effect waves-light button-collapse red"><i class="material-icons">menu</i></a>
        </div>

<!--
        <div class="parallax-container">
        <div class="row">
           -->
        <div id="new" class="col s12 m9 l12"><!-- primer parte -->
            <div class="#ffffff white">
            <h2>Nuevas negociaciones especiales aprovadas</h2>
            </br>
        
                 <table class="container highlight responsive-table">
        <thead>
          <tr>
              <th>Cliente / Grupo</th>
              <th>concecionario</th>
              <th>Folio</th>
              <th>OP</th>
              <th>Vigencia de la propuesta</th>
              
          </tr>
        </thead>

        <tbody>
          <tr>
              <?php
			while($row = mysqli_fetch_array($resultado)):
			
		?>
            <td><?php  echo $row['grupo']; ?></td>
            <td><?php  echo $row['des_concecion']; ?></td>
            <td> <a href="#" onclick="javascript:abrir('<?php echo $row['id_pedido']; ?>')"><?php  echo $row['folio']; ?></a></td>
            <td><?php  echo "<a href=about.php?id={$row['id_usuario']}>".$row['nombre'] .' '. $row['apellido_p'] .' '. $row['apellido_m']."</a>"?></td>
          </tr>

        </tbody>
      </table>
            </div> 
        </div>
           
        <div id="aprove" class="col s12"> <!-- segunda parte -->
                 <div class="#ffffff white">
            <h2>Negociaciones especiales por aprovar</h2>
            </br>
        
                 <table class="container highlight responsive-table">
        <thead>
          <tr>
              <th>Cliente / Grupo</th>
              <th>concecionario</th>
              <th>Folio</th>
              <th>OP</th>
              <th>Fecha</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><?php  echo $row['grupo']; ?></td>
            <td><?php  echo $row['des_concecion']; //echo "<script>location.href='admin.php'</script>"?></td>
            
              <td> <a href="#" onclick="javascript:abrir('<?php echo $row['id_pedido']; ?>')"><?php  echo $row['folio']; ?></a></td>
            <td><?php  echo "<a href=about.php?id={$row['id_usuario']}>".$row['nombre'] .' '. $row['apellido_p'] .' '. $row['apellido_m']."</a>"?></td>
            <td>
                <p>aqui va un date</p>
            </td>
          </tr>
        </tbody>
      </table>
            </div> 
        </div>
        
        
            <?php
				endwhile;
            ?>

    <!--    
<div class="parallax"><img src="img/realback.jpg"></div>

</div>      
</div>
-->
<!--Aqui parale te estas pasando de "#$%@ -->  
      
    
    </body>

<?php
        $sql4="SELECT * FROM `footer`";
			  
        $resultado4 = mysqli_query($link,$sql4) or die(mysql_error());
    
        $row4 = mysqli_fetch_array($resultado4);
?>
            <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">MAN Truck & Bus</h5>
          <p class="grey-text text-lighten-4"><?php echo $row4['des_footer']; ?></p>
              </div>
              <div class="col l6 s12">
          <h5 class="white-text">Otros sitios</h5>
          <ul>
            <li><a class="white-text" href="http://192.168.2.90/tickets/" target="_blank">Sistema Tickets</a></li>
            <li><a class="white-text" href="http://directorio.mantruckandbus-servicio.com.mx/" target="_blank">Directorio MAN</a></li>
            
          </ul>
        </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
                <?php echo $row4['author']; ?>
                
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
          </div>
        </footer>  
      
      
      <script id="source" language="javascript" type="text/javascript">
    $(".button-collapse").sideNav();
          $(document).ready(function(){
      $('.parallax').parallax();
    });
 

            </script>
<script>
       function abrir(idNeg){window.open("table2.php?id=" + idNeg,"_blank","height=500,width=700,status=yes,toolbar=no,menubar=no,location=no");}
</script>

  </html>