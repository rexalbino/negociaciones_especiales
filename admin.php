<?php
require("connection.php");

session_start();
$user=$_SESSION['id'];
$sql2="SELECT * FROM `usuarios` WHERE `id_usuario`='$user'";
$resultado2 = mysqli_query($link,$sql2) ;
$row2 = mysqli_fetch_array($resultado2);
if (@!$_SESSION['user']) {
	header("Location:login.php");
}elseif($row2['roll']==0){
    echo "<script language=javaScript>alert('Usted no puede entar aqui');</script>";
    header("Location:index.php");
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
      $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
    
    $sql3="
        SELECT `id_pedido`, `adicional`, `anio`, `cantidad`, `volumen_total`, `precio_lista`, `precio_solicitado`, `descuento`, `descuento_precent`, `fecha_factura_mtb`, `piso_adicional`, `garantia_extendida`, `bono_whosale`, `bono_retail`, `accesorios_costo`, `carroceria_otro`, `flete_destino`, `flete_costo`, `enganche_money`, `enganche_percent`, `forma_amortisacion`, `plazo_pago`, `precio_venta`, `fecha_facturacion_cliente`, `carroceria_costo`, `accesorios`, `otros_costos`, `folio`, `vigencia`,producto.des_producto, carroceria.des_carrocero, segmento.des_segmento,moneda.des_moneda, who_facture.des_who_facture,usuarios.nombre,usuarios.apellido_p,usuarios.apellido_m,usuarios.grupo,concecion.des_concecion,usuarios.id_usuario,aprovado   FROM fact_camiones 
            LEFT JOIN producto on producto.id_producto = fact_camiones.id_producto
            JOIN carroceria on carroceria.id_carrocero = fact_camiones.id_carrocero 
            JOIN segmento ON segmento.id_segmento = fact_camiones.id_segmento
            JOIN moneda ON moneda.id_moneda = fact_camiones.id_moneda
            JOIN who_facture on who_facture.id_who_facture = fact_camiones.id_who_facture
            JOIN usuarios ON usuarios.id_usuario = fact_camiones.id_usuario
            JOIN concecion ON usuarios.id_concecion = concecion.id_concerionario
        ";
      $resultado3 = mysqli_query($link,$sql3) or die(mysqli_error($link));
    
    $sql5="
        SELECT `id_pedido`, `adicional`, `anio`, `cantidad`, `volumen_total`, `precio_lista`, `precio_solicitado`, `descuento`, `descuento_precent`, `fecha_factura_mtb`, `piso_adicional`, `garantia_extendida`, `bono_whosale`, `bono_retail`, `accesorios_costo`, `carroceria_otro`, `flete_destino`, `flete_costo`, `enganche_money`, `enganche_percent`, `forma_amortisacion`, `plazo_pago`, `precio_venta`, `fecha_facturacion_cliente`, `carroceria_costo`, `accesorios`, `otros_costos`, `folio`, `vigencia`,producto.des_producto, carroceria.des_carrocero, segmento.des_segmento,moneda.des_moneda, who_facture.des_who_facture,usuarios.nombre,usuarios.apellido_p,usuarios.apellido_m,usuarios.grupo,concecion.des_concecion,usuarios.id_usuario,aprovado   FROM fact_camiones 
            LEFT JOIN producto on producto.id_producto = fact_camiones.id_producto
            JOIN carroceria on carroceria.id_carrocero = fact_camiones.id_carrocero 
            JOIN segmento ON segmento.id_segmento = fact_camiones.id_segmento
            JOIN moneda ON moneda.id_moneda = fact_camiones.id_moneda
            JOIN who_facture on who_facture.id_who_facture = fact_camiones.id_who_facture
            JOIN usuarios ON usuarios.id_usuario = fact_camiones.id_usuario
            JOIN concecion ON usuarios.id_concecion = concecion.id_concerionario
        ";
      $resultado5 = mysqli_query($link,$sql5) or die(mysqli_error($link));
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
        <li class="tab"><a href="#new">Nuevas NE</a></li>
        <li class="tab"><a href="#aprove">NE por aprobar</a></li>
        <li class="tab"><a href="#all">Todas NE</a></li>
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
        <li><a href="showusers.php"><i class="material-icons left">recent_actors</i>mostrar ususarios</a></li>
        <li><a href="newuser.php"><i class="material-icons left">assignment_ind</i>Crear nuevo usuario</a></li>
    <li><div class="divider"></div></li>
        <li><a href="scarrosas.php"><i class="material-icons left">subtitles</i>Carrocerias</a></li>
        <li><a href="sconcecionarios.php"><i class="material-icons left">perm_contact_calendar</i>Concesionarios</a></li>
        <li><a href="smoneda.php"><i class="material-icons left">payment</i>Monedas</a></li>
        <li><a href="sproductos.php"><i class="material-icons left">store</i>Productos</a></li>
        <li><a href="ssegmento.php"><i class="material-icons left">import_export</i>Segmento</a></li>
        <li><a href="sfacture.php"><i class="material-icons left">assignment</i>Who facture</a></li>
    <li><div class="divider"></div></li>
        <li><a href="close.php"><i class="material-icons left">person_pin</i>Cerrar sesion</a></li>
  </ul>
        <div class="fixed-action-btn">
 <a href="#" data-activates="slide-out" class="btn-floating btn-large waves-effect waves-light button-collapse red"><i class="material-icons">menu</i></a>
        </div>

<!--
        <div class="parallax-container">
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
              <th>Editar</th>
              <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
            <?php
			while($row1 = mysqli_fetch_array($resultado)):
			
		?>
          <tr>
              
            <td><?php  echo $row1['grupo']; ?></td>
            <td><?php  echo $row1['des_concecion']; ?></td>
            <td> <a href="#" onclick="javascript:abrir('<?php echo $row1['id_pedido']; ?>')"><?php  echo $row1['folio']; ?></a></td>
            <td><?php  echo "<a href=about.php?id={$row1['id_usuario']}>".$row1['nombre'] .' '. $row1['apellido_p'] .' '. $row1['apellido_m']."</a>"?></td>
            <td><i class="material-icons">mode_edit</i></td>
            <td><i class="material-icons">delete</i></td>
              
          </tr>
<?php
				endwhile;
            ?>
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
              <th>Aprobar</th>
          </tr>
        </thead>

        <tbody>
            <?php
			while($row3 = mysqli_fetch_array($resultado3)):
			
		?>
          <tr>
              
            <td><?php  echo $row3['grupo']; ?></td>
            <td><?php  echo $row3['des_concecion']; //echo "<script>location.href='admin.php'</script>"?></td>
            
              <td> <a href="#" onclick="javascript:abrir('<?php echo $row3['id_pedido']; ?>')"><?php  echo $row3['folio']; ?></a></td>
            <td><?php  echo "<a href=about.php?id={$row3['id_usuario']}>".$row3['nombre'] .' '. $row3['apellido_p'] .' '. $row3['apellido_m']."</a>"?></td>
            <td>
                
                <select class="browser-default black-text" name="aprovado" id="aprovado" onclick="buscar();">
                        <br>
                        <option value="" selected>En espera</option>
                        
                        <option  value="1"> Aprovado </option>
                        <option  value="2"> Desaprovado </option>
                        
                </select>
                
            </td>
            
          </tr>
            <?php
				endwhile;
            ?>
        </tbody>
      </table>
            
            <div id="show" >
                
            </div>
            
            </div> 
        </div>
        
        <div id="all" class="col s12"> <!-- tercera parte -->
        <div class="#ffffff white">
            <h2>Todas las negociaciones especiales aprovadas</h2>
            </br>
        
                 <table class="container highlight responsive-table">
        <thead>
          <tr>
              <th>Cliente / Grupo</th>
              <th>concecionario</th>
              <th>Folio</th>
              <th>OP</th>
              <th>Editar</th>
              <th>Eliminar</th>
          </tr>
        </thead>

        <tbody>
            <?php
			while($row5 = mysqli_fetch_array($resultado5)):
			
		?>
          <tr>
            <td><?php  echo $row5['grupo']; ?></td>
            <td><?php  echo $row5['des_concecion']; ?></td>
            <td> <a href="#" onclick="javascript:abrir('<?php echo $row5['id_pedido']; ?>')"><?php  echo $row5['folio']; ?></a></td>
            <td><?php  echo "<a href=about.php?id={$row5['id_usuario']}>".$row5['nombre'] .' '. $row5['apellido_p'] .' '. $row5['apellido_m']."</a>"?></td>
            <td><i class="material-icons">mode_edit</i></td>
            <td><i class="material-icons">delete</i></td>
          </tr>
            <?php
				endwhile;
            ?>
        </tbody>
      </table>
            
            </div> 
        </div>
        

                    <!-- Modal Structure -->
 <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Porque no ha sido aprovada</h4>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Breve explicacion de porque no se ha aprovado</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Enviar</a>
    </div>
  </div>

   <!--  
<div class="parallax"><img src="img/realback.jpg"></div>

</div>
-->
<!--Aqui parale te estas pasando de "#$%@ -->  
      
    
    </body>
            <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                   <a class="grey-text text-lighten-3" href="javascript:abrir('table.html')">Terminos y condiciones</a>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>  
      
      
      <script>
    $(".button-collapse").sideNav();
          $(document).ready(function(){
      $('.parallax').parallax();
    });
          
          $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
 

            </script>
<script>
       function abrir(idNeg){window.open("table2.php?id=" + idNeg,"_blank","height=500,width=700,status=yes,toolbar=no,menubar=no,location=no");}
    
    
</script>

<script>
$(document).ready(function() {
    $("#show").html('<a class="waves-effect waves-light btn disabled" href="#modal1">Explicacion</a>');
});

function buscar() {
    var textoBusqueda ;
    
    textrw = $("#aprovado").val();
    textoBusqueda=parseInt(textrw);
    
    
     if (textoBusqueda == "2") {
        
            $("#show").html('<a class="waves-effect waves-light btn" href="#modal1">Explicacion</a>');
          
     } else { 
        $("#show").html('<a class="waves-effect waves-light btn disabled" href="#modal1">Explicacion</a>');
        };
};
</script>

  </html>