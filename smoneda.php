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
        $sql="SELECT * FROM `moneda`";
      $resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
      ?>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="admin.php" class="brand-logo">Negociacion especial</a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="tab"><a href="admin.php">Inicio</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="tab"><a href="admin.php">Inicio</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#des">Actuales</a></li>
        <li class="tab"><a href="#insert">Añadir</a></li>
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
        <li><a href="sconceionarios.php"><i class="material-icons left">perm_contact_calendar</i>Concesionarios</a></li>
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
        <div id="des" class="col s12 m9 l12">
           <h3>Bienvenido administrador a tipo de moneda </h3>
            <p>En este menu puedes consultar editar añadir y eliminar los tipos de moneda</p>
         <table class="container highlight responsive-table">
        <thead>
          <tr>
              <th>Tipo moneda</th>
              <th>Editar</th>
              <th>Borrar</th>
              
              
          </tr>
        </thead>

        <tbody>
          
              <?php
			while($row = mysqli_fetch_array($resultado)):
			
		?>
            <tr>
            <td><?php  echo $row['des_moneda']; ?></td>
            <td><?php  echo "<a href=actualizar.php?id={$row['id_moneda']}><i class='material-icons'>mode_edit</i></a>";?></td>
            <td><?php  echo "<a href=beforedelete.php?id={$row['id_moneda']}><i class='material-icons'>delete</i></a>";?></td>
                </tr>

              <?php
				endwhile;
            ?>
          
        </tbody>
      </table>
        </div>
        <div id="insert" class="col s12 m9 l12">
            
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