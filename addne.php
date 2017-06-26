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
        
        
        <meta http-equiv="Content-type" content="text/html"; charset="utf-8 "/>
        <title>Negociaciones especiales</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="shortcut icon" href="img/man.ico" type="image/x-icon" > 
    </head>
    
    <?php
        $folio='NE'.date("Ymd");
    
        $sql="SELECT * FROM `who_facture`";
        $resultado = mysqli_query($link,$sql) ;
        //tercera consulta
        $sql3="SELECT `des_concecion` FROM `concecion` INNER JOIN usuarios on usuarios.id_concecion = id_concerionario WHERE usuarios.id_usuario='$user'";
        $resultado3 = mysqli_query($link,$sql3) ;
        $row3 = mysqli_fetch_array($resultado3);
        //cuarta consulta
        
        //quinta consulta
        
        //sexta consulta
        
        //septima consulta
        $sql7="SELECT * FROM `moneda`";
        $resultado7 = mysqli_query($link,$sql7) ;
        //octava consulta
        
        //novena consulta
        $sql9="SELECT * FROM `producto`";
        $resultado9 = mysqli_query($link,$sql9) ;
    
    
        // se que esto no se hace pero parece que no me queda otra opcion voy a dar mucha carga pero si no lo hago asi no me sale la informacion que necesito :'(
    
        //sqls producto
        
        $sql4="SELECT * FROM `producto`";
        //$resultado4 = mysqli_query($link,$sql4) ;
        
        $sqlproducto1="SELECT * FROM `producto` ";
        $resultadoproducto1= mysqli_query($link,$sqlproducto1) ;
        $resultadoproducto2= mysqli_query($link,$sqlproducto1) ;
        $resultadoproducto3= mysqli_query($link,$sqlproducto1) ;
        $resultadoproducto4= mysqli_query($link,$sqlproducto1) ;    
        $resultadoproducto5= mysqli_query($link,$sqlproducto1) ;
        $resultadoproducto6= mysqli_query($link,$sqlproducto1) ;
        $resultadoproducto7= mysqli_query($link,$sqlproducto1) ;
    
        //Cosulta carrocerias
        $sqlcarrocero="SELECT * FROM `carroceria`";
        //$resultado5 = mysqli_query($link,$sql5) ;
    
        $resultadocarro1 = mysqli_query($link,$sqlcarrocero);
        $resultadocarro2 = mysqli_query($link,$sqlcarrocero);
        $resultadocarro3 = mysqli_query($link,$sqlcarrocero);
        $resultadocarro4 = mysqli_query($link,$sqlcarrocero);
        $resultadocarro5 = mysqli_query($link,$sqlcarrocero);
        $resultadocarro6 = mysqli_query($link,$sqlcarrocero);
        $resultadocarro7 = mysqli_query($link,$sqlcarrocero);
    
    
        //consulta segmento
    
        $sqlsegmento="SELECT * FROM `segmento`";
        //$resultado8 = mysqli_query($link,$sql8) ;
    
        $resultadosegmento1 = mysqli_query($link,$sqlsegmento);
        $resultadosegmento2 = mysqli_query($link,$sqlsegmento);
        $resultadosegmento3 = mysqli_query($link,$sqlsegmento);
        $resultadosegmento4 = mysqli_query($link,$sqlsegmento);
        $resultadosegmento5 = mysqli_query($link,$sqlsegmento);
        $resultadosegmento6 = mysqli_query($link,$sqlsegmento);
        $resultadosegmento7 = mysqli_query($link,$sqlsegmento);
    
        //Consulta moneda de calculo aqui asi como estoy llamando puede y que haya mas
    
        $sqlmoneda="SELECT * FROM `moneda`";
        //$resultado6 = mysqli_query($link,$sql6) ;
        $resultadomoneda1 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda2 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda3 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda4 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda5 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda6 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda7 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda8 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda9 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda10 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda11 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda12 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda13 = mysqli_query($link,$sqlmoneda);
        $resultadomoneda14 = mysqli_query($link,$sqlmoneda);
    ?>
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        
        <nav class="nav-extended">
    <div class="nav-wrapper">
      <a <?php if($row2['roll']==1){ ?> href="admin.php" <?php }else{?> href="index.php" <?php }?> class="brand-logo">Negociacion especial</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <?php if($row2['roll']==1){ ?>
            <li class="tab"><a href="admin.php#new">Nuevas NE</a></li>
            <li class="tab"><a href="admin.php#aprove">NE por aprobar</a></li>
            <li class="tab"><a href="admin.php#all">Todas NE</a></li>
          <?php }else{?>
            <li class="tab"><a href="index.php#new">Nuevas NE</a></li>
            <li class="tab"><a href="index.php#aprove">NE por aprobar</a></li>
            <li class="tab"><a href="index.php#all">Todas NE</a></li>
          <?php }?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li class="tab"><a href="index.php#new">Nuevas NE</a></li>
        <li class="tab"><a href="index.php#aprove">NE por aprobar</a></li>
        <li class="tab"><a href="index.php#all">Todas NE</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        
        <li class="tab"><a href="#add">Agregar nueva NE</a></li>
      </ul>
    </div>
  </nav>

  <div class="parallax-container2">
        <div class="row">    
      <div class="">
      
        <div id="add" class="col s12"> <!-- cuarta parte -->
        <div class="#ffffff white">
            <h2>Agregar nueva Negociacion Especial</h2>
            </br>
            <form id= 'formane' name="formane">
            <table>
    <tbody>
        <tr>
            
            <td>Grupo/cliente <input name="grucli" id="grucli" value="<?php echo $row2['grupo'] ?>" type="text"> </td>
            <td>Facturacion dealer o directo cliente
                <div class="row">    
            <div class="input-field col s12">
                    <select class="browser-default black-text" name="whofacture" id="whofacture">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($row = mysqli_fetch_array($resultado)):
		                  ?>
                        <option value="<?php echo $row['id_who_facture'] ?>"> <?php echo $row['des_who_facture'] ?></option>
                        <?php
				            endwhile;
                        ?>
                    </select>
            </div>
            </div>

                    
                </td>
            <td>Folio(N° NE) <input name="folio" id="folio" type="text" value="<?php echo $folio; ?>"></td>
        </tr>
        <tr>
            <td>Concesionario <input type="text" name="concecionario" id="concecionario" value="<?php echo $row3['des_concecion'] ?>"></td>
            <td>Nombre <input type="text" name="quienes" id="quienes" value="<?php echo $row2['nombre'].' '.$row2['apellido_p'].' '.$row2['apellido_m'] ?>">
                
                
            </td>
            <td>Vigencia de propuesta <input type="date" class="datepicker" name="vigpro" id="vigpro" <?php if($row2['roll']==1){ ?>  <?php }else{?> readonly <?php }?> >
                
            </td>
        </tr>
</tbody>
</table>
<table>
    <tbody>
        <tr>
            <td>Explique brevemente la importancia de aprovar esta negociacion:</td>
        </tr><tr>
            <td><input type="text" name="descripcion" id="descripcion"></td>
        </tr>

    </tbody>
</table>

<table>
    <tbody>
        <tr>
            <th>Datos generales del producto</th>
            <th>Tipo 1
            </th>
            <th>Tipo 2
                <select class="browser-default black-text" name="opcion2" id="opcion2">
                        <br>
                        <option value="0" selected>Segunda opcion</option>
                        <option value="1" >Si</option>
                </select>
            </th>
            <th>Tipo 3
                <select class="browser-default black-text" name="opcion3" id="opcion3">
                        <br>
                        <option value="0" disabled selected>Tercera opcion</option>
                        <option value="1" >Si</option>
                </select>
            </th>
            <th>Tipo 4
                <select class="browser-default black-text" name="opcion4" id="opcion4">
                        <br>
                        <option value="0" disabled selected>cuarta opcion</option>
                        <option value="1" >Si</option>
                </select>
            </th>
            <th>Tipo 5
                <select class="browser-default black-text" name="opcion5" id="opcion5">
                        <br>
                        <option value="0" disabled selected>Quinta opcion</option>
                        <option value="1" >Si</option>
                </select>
            </th>
            <th>Tipo 6
                <select class="browser-default black-text" name="opcion6" id="opcion6">
                        <br>
                        <option value="0" disabled selected>Sexta opcion</option>
                        <option value="1" >Si</option>
                </select>
            </th>
            <th>Tipo 7
                <select class="browser-default black-text" name="opcion7" id="opcion7">
                        <br>
                        <option value="0" disabled selected>Septima opcion</option>
                        <option value="1" >Si</option>
                </select>
            </th>
        </tr>
        <tr>
            <td>Nombre del producto</td>
            <td>
                
                <select class="browser-default black-text" name="busqueda" id="busqueda" autocomplete="off" onchange="buscar();">
                        <br>
                        <option value="" selected>Elije uno</option>
                        
                        <?php
			                 while($pro1 = mysqli_fetch_array($resultadoproducto1)):
		                  ?>
                        <option value="<?php echo $pro1['id_producto'] ?>"> <?php echo $pro1['des_producto'] ?></option>
                        <?php
				            endwhile;
                        ?>
                        
                </select>
                
                <input type="number" name="resultadobusqueda1" id="resultadoBusqueda1" value="0"  readonly>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="product2" id="product2">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($pro2 = mysqli_fetch_array($resultadoproducto2)):
		                  ?>
                        <option value="<?php echo $pro2['id_producto'] ?>"> <?php echo $pro2['des_producto'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadobusqueda2" id="resultadoBusqueda2" value="0" readonly/>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="product3" id="product3">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($pro3 = mysqli_fetch_array($resultadoproducto3)):
		                  ?>
                        <option value="<?php echo $pro3['id_producto'] ?>"> <?php echo $pro3['des_producto'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadobusqueda3" id="resultadoBusqueda3" value="0" readonly/>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="product4" id="product4">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($pro4 = mysqli_fetch_array($resultadoproducto4)):
		                  ?>
                        <option value="<?php echo $pro4['id_producto'] ?>"> <?php echo $pro4['des_producto'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadobusqueda4" id="resultadoBusqueda4" value="0" readonly/>
                
            </td>
            <td>
                
            <select class="browser-default black-text" name="product5" id="product5">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($pro5 = mysqli_fetch_array($resultadoproducto5)):
		                  ?>
                        <option value="<?php echo $pro5['id_producto'] ?>"> <?php echo $pro5['des_producto'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadobusqueda5" id="resultadoBusqueda5" value="0" readonly/>
                
            </td>
            <td>
                
            <select class="browser-default black-text" name="product6" id="product6">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($pro6 = mysqli_fetch_array($resultadoproducto6)):
		                  ?>
                        <option value="<?php echo $pro6['id_producto'] ?>"> <?php echo $pro6['des_producto'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadobusqueda6" id="resultadoBusqueda6" value="0" readonly/>
                
            </td>
            <td>
                
            <select class="browser-default black-text" name="product7" id="product7">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($pro7 = mysqli_fetch_array($resultadoproducto7)):
		                  ?>
                        <option value="<?php echo $pro7['id_producto'] ?>"> <?php echo $pro7['des_producto'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadobusqueda7" id="resultadoBusqueda7" value="0" readonly/>
                
            </td>
        </tr>
        <tr>
            <td>Caracteristica adicional</td>
             <td>
                
                
                <input type="text" name="carca1" id="carca1">
                
                
            </td>
            <td>
                
                <input type="text" name="carca2" id="carca2">
                
            </td>
            <td>
                
                <input type="text" name="carca3" id="carca3">
                
            </td>
            <td>
                
                <input type="text" name="carca4" id="carca4">
                
            </td>
            <td>
                
            <input type="text" name="carca5" id="carca5">
                
            </td>
            <td>
                
            <input type="text" name="carca6" id="carca6">
                
            </td>
            <td>
                
            <input type="text" name="carca7" id="carca7">
                
            </td>
        </tr>
        <tr>
            <td>Carroceria de linea (Plan carrocero)</td>
            <td>
                
                <select class="browser-default black-text" name="carroceria1" id="carroceria1" onchange="buscarca();" >
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($carro1 = mysqli_fetch_array($resultadocarro1)):
		                  ?>
                        <option value="<?php echo $carro1['id_carrocero'] ?>"> <?php echo $carro1['des_carrocero'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadoca" id="resultadoca" value="0"  readonly/>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="carroceria2" id="carroceria2">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($carro2 = mysqli_fetch_array($resultadocarro2)):
		                  ?>
                        <option value="<?php echo $carro2['id_carrocero'] ?>"> <?php echo $carro2['des_carrocero'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadoca2" id="resultadoca2" value="0" readonly/>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="carroceria3" id="carroceria3">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($carro3 = mysqli_fetch_array($resultadocarro3)):
		                  ?>
                        <option value="<?php echo $carro3['id_carrocero'] ?>"> <?php echo $carro3['des_carrocero'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadoca3" id="resultadoca3" value="0" readonly/>
                
            </td>
            <td>
                
               <select class="browser-default black-text" name="carroceria4" id="carroceria4">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($carro4 = mysqli_fetch_array($resultadocarro4)):
		                  ?>
                        <option value="<?php echo $carro4['id_carrocero'] ?>"> <?php echo $carro4['des_carrocero'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadoca4" id="resultadoca4" value="0" readonly/>
                
            </td>
            <td>
                
            <select class="browser-default black-text" name="carroceria5" id="carroceria5">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($carro5 = mysqli_fetch_array($resultadocarro5)):
		                  ?>
                        <option value="<?php echo $carro5['id_carrocero'] ?>"> <?php echo $carro5['des_carrocero'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadoca5" id="resultadoca5" value="0" readonly/>
                
            </td>
            <td>
                
            <select class="browser-default black-text" name="carroceria6" id="carroceria6">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($carro6 = mysqli_fetch_array($resultadocarro6)):
		                  ?>
                        <option value="<?php echo $carro6['id_carrocero'] ?>"> <?php echo $carro6['des_carrocero'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadoca6" id="resultadoca6" value="0" readonly/>
                
            </td>
            <td>
                
            <select class="browser-default black-text" name="carroceria7" id="carroceria7">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($carro7 = mysqli_fetch_array($resultadocarro7)):
		                  ?>
                        <option value="<?php echo $carro7['id_carrocero'] ?>"> <?php echo $carro7['des_carrocero'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                <input type="number" name="resultadoca7" id="resultadoca7" value="0" readonly/>
                
            </td>
        </tr>
        <tr>
            <td>Segmento (carga/pasaje)</td>
            <td>
                
                <select class="browser-default black-text" name="segmento1" id="segmento1">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($seg1 = mysqli_fetch_array($resultadosegmento1)):
		                  ?>
                        <option value="<?php echo $seg1['id_segmento'] ?>"> <?php echo $seg1['des_segmento'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
                
                
            </td>
            <td>
                <select class="browser-default black-text" name="segmento2" id="segmento2">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($seg2 = mysqli_fetch_array($resultadosegmento2)):
		                  ?>
                        <option value="<?php echo $seg2['id_segmento'] ?>"> <?php echo $seg2['des_segmento'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="segmento3" id="segmento3">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($seg3 = mysqli_fetch_array($resultadosegmento3)):
		                  ?>
                        <option value="<?php echo $seg3['id_segmento'] ?>"> <?php echo $seg3['des_segmento'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="segmento4" id="segmento4">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($seg4 = mysqli_fetch_array($resultadosegmento4)):
		                  ?>
                        <option value="<?php echo $seg4['id_segmento'] ?>"> <?php echo $seg4['des_segmento'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="segmento5" id="segmento5">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($seg5 = mysqli_fetch_array($resultadosegmento5)):
		                  ?>
                        <option value="<?php echo $seg5['id_segmento'] ?>"> <?php echo $seg5['des_segmento'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="segmento6" id="segmento6">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($seg6 = mysqli_fetch_array($resultadosegmento6)):
		                  ?>
                        <option value="<?php echo $seg6['id_segmento'] ?>"> <?php echo $seg6['des_segmento'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="segmento7" id="segmento7">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($seg7 = mysqli_fetch_array($resultadosegmento7)):
		                  ?>
                        <option value="<?php echo $seg7['id_segmento'] ?>"> <?php echo $seg7['des_segmento'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
        </tr>
        <tr>
            <td>Año modelo</td>
            <td><input type="number" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>"  id="aniomodel1" name="aniomodel1"</td>
            <td><input type="number" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>"  id="aniomodel2" name="aniomodel2"></td>
            <td><input type="number" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>"  id="aniomodel3" name="aniomodel3"></td>
            <td><input type="number" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>"  id="aniomodel4" name="aniomodel4"></td>
            <td><input type="number" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>"  id="aniomodel5" name="aniomodel5"></td>
            <td><input type="number" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>"  id="aniomodel6" name="aniomodel6"></td>
            <td><input type="number" min="1900" max="2099" step="1" value="<?php echo date("Y"); ?>"  id="aniomodel7" name="aniomodel7"></td>
        </tr>
    </tbody>
</table>
        <div class="#263238 blue-grey darken-4">
                    <h5 class="white-text">Detalle de la operacion:</h5>
                </div>
        <table>
    <tbody>
        
        <tr>
            <td>Volumen (cantidad de unidades)</td>
            <td><input type="number" id="uno"   name="uno"    value="0" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" ></td>
            <td><input type="number" id="dos"   name="dos"    value="0" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" ></td>
            <td><input type="number" id="tres"  name="tres"   value="0" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" ></td>
            <td><input type="number" id="cuatro"name="cuatro" value="0" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" ></td>
            <td><input type="number" id="cinco" name="cinco"  value="0" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" ></td>
            <td><input type="number" id="seis"  name="seis"   value="0" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" ></td>
            <td><input type="number" id="siete" name="siete"  value="0" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" ></td>
        </tr>
        <tr>
            <td>Volumen total</td>
            <td><input type="number" name="total" id="total" value="Ver total" onchange="sumar(uno,dos,tres,cuatro,cinco,seis,siete)" readonly></td>
        </tr>
        <tr>
            <td>Moneda de calculo</td>
            <td>
                <select class="browser-default black-text" name="money1" id="money1">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money1 = mysqli_fetch_array($resultadomoneda1)):
		                  ?>
                        <option value="<?php echo $money1['id_moneda'] ?>"> <?php echo $money1['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
            </td>
            <td>
                
                <select class="browser-default black-text" name="money2" id="money2">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money2 = mysqli_fetch_array($resultadomoneda2)):
		                  ?>
                        <option value="<?php echo $money2['id_moneda'] ?>"> <?php echo $money2['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="money3" id="money3">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money3 = mysqli_fetch_array($resultadomoneda3)):
		                  ?>
                        <option value="<?php echo $money3['id_moneda'] ?>"> <?php echo $money3['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="money4" id="money4">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money4 = mysqli_fetch_array($resultadomoneda4)):
		                  ?>
                        <option value="<?php echo $money4['id_moneda'] ?>"> <?php echo $money4['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="money5" id="money5">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money5 = mysqli_fetch_array($resultadomoneda5)):
		                  ?>
                        <option value="<?php echo $money5['id_moneda'] ?>"> <?php echo $money5['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="money6" id="money6">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money6 = mysqli_fetch_array($resultadomoneda6)):
		                  ?>
                        <option value="<?php echo $money6['id_moneda'] ?>"> <?php echo $money6['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
            <td>
                
                <select class="browser-default black-text" name="money7" id="money7">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money7 = mysqli_fetch_array($resultadomoneda7)):
		                  ?>
                        <option value="<?php echo $money7['id_moneda'] ?>"> <?php echo $money7['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
                
            </td>
        </tr>
        <tr>
            <td>Precio lista</td>
            <td><input type="number" name="totalisimo" id="totalisimo" value="0" onmousemove="prelist()" readonly></td>
            <td><input type="number" name="totalisimo2" id="totalisimo2" value="0"></td>
            <td><input type="number" name="totalisimo3" id="totalisimo3" value="0"></td>
            <td><input type="number" name="totalisimo4" id="totalisimo4" value="0"></td>
            <td><input type="number" name="totalisimo5" id="totalisimo5" value="0"></td>
            <td><input type="number" name="totalisimo6" id="totalisimo6" value="0"></td>
            <td><input type="number" name="totalisimo7" id="totalisimo7" value="0"></td>
        </tr>
        <tr>
            <td>Precio Solicitado</td>
            <td><input type="number" value="0" name="psoli1" id="psoli1" onchange="desc();"></td>
            <td><input type="number" value="0" name="psoli2" id="psoli2"></td>
            <td><input type="number" value="0" name="psoli3" id="psoli3"></td>
            <td><input type="number" value="0" name="psoli4" id="psoli4"></td>
            <td><input type="number" value="0" name="psoli5" id="psoli5"></td>
            <td><input type="number" value="0" name="psoli6" id="psoli6"></td>
            <td><input type="number" value="0" name="psoli7" id="psoli7"></td>
        </tr>
        <tr>
            <td>Descuento - $</td>
            <td><input type="number" value="0" name="descu1" id="descu1" ></td>
            <td><input type="number" value="0" name="descu2" id="descu2"></td>
            <td><input type="number" value="0" name="descu3" id="descu3"></td>
            <td><input type="number" value="0" name="descu4" id="descu4"></td>
            <td><input type="number" value="0" name="descu5" id="descu5"></td>
            <td><input type="number" value="0" name="descu6" id="descu6"></td>
            <td><input type="number" value="0" name="descu7" id="descu7"></td>
        </tr>
        <tr>
            <td>Descuento - %</td>
            <td><input type="number" value="0" name="porciento1" id="porciento1" onmousemove="pordecu();"></td>
            <td><input type="number" value="0" name="porciento2" id="porciento2"></td>
            <td><input type="number" value="0" name="porciento3" id="porciento3"></td>
            <td><input type="number" value="0" name="porciento4" id="porciento4"></td>
            <td><input type="number" value="0" name="porciento5" id="porciento5"></td>
            <td><input type="number" value="0" name="porciento6" id="porciento6"></td>
            <td><input type="number" value="0" name="porciento7" id="porciento7"></td>
        </tr>
        <tr>
            <td>Fecha de facturacion MTB</td>
            <td><input type="month" name="facturedate1" id="facturedate1"  style="width:150px" ></td>
            <td><input type="month" name="facturedate2" id="facturedate2"  style="width:150px" ></td>
            <td><input type="month" name="facturedate3" id="facturedate3"  style="width:150px" ></td>
            <td><input type="month" name="facturedate4" id="facturedate4"  style="width:150px" ></td>
            <td><input type="month" name="facturedate5" id="facturedate5"  style="width:150px" ></td>
            <td><input type="month" name="facturedate6" id="facturedate6"  style="width:150px" ></td>
            <td><input type="month" name="facturedate7" id="facturedate7"  style="width:150px" ></td>
        </tr>
        
            
        
    </tbody>
</table>
                
                <div class="#263238 blue-grey darken-4">
                    <h5 class="white-text">Otros beneficios solicitados</h5>
                </div>
<table>
    <tbody>
        
        <tr>
            <td>Plan piso adicional</td>
            <td><input type="text" name="aditionalfloor1" id="aditionalfloor1" ></td>
            <td><input type="text" name="aditionalfloor2" id="aditionalfloor2" ></td>
            <td><input type="text" name="aditionalfloor3" id="aditionalfloor3" ></td>
            <td><input type="text" name="aditionalfloor4" id="aditionalfloor4" ></td>
            <td><input type="text" name="aditionalfloor5" id="aditionalfloor5" ></td>
            <td><input type="text" name="aditionalfloor6" id="aditionalfloor6" ></td>
            <td><input type="text" name="aditionalfloor7" id="aditionalfloor7" ></td>
        </tr>
        <tr class="#f44336 red">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Garantia extendida</td>
            <td><input type="text" name="extendg1" id="extendg1"></td>
            <td><input type="text" name="extend2g" id="extendg2"></td>
            <td><input type="text" name="exten3dg" id="extendg3"></td>
            <td><input type="text" name="exte4ndg" id="extendg4"></td>
            <td><input type="text" name="ext5endg" id="extendg5"></td>
            <td><input type="text" name="ex6tendg" id="extendg6"></td>
            <td><input type="text" name="e7xtendg" id="extendg7"></td>
        </tr>
        <tr>
            <td>Moneda de calculo bono</td>
            <td>
                <select class="browser-default black-text" name="money8" id="money8">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money8 = mysqli_fetch_array($resultadomoneda8)):
		                  ?>
                        <option value="<?php echo $money8['id_moneda'] ?>"> <?php echo $money8['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
            </td>
            <td>
                <select class="browser-default black-text" name="money9" id="money9">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money9 = mysqli_fetch_array($resultadomoneda9)):
		                  ?>
                        <option value="<?php echo $money9['id_moneda'] ?>"> <?php echo $money9['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
            </td>
            <td>
                <select class="browser-default black-text" name="money10" id="money10">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money10 = mysqli_fetch_array($resultadomoneda10)):
		                  ?>
                        <option value="<?php echo $money10['id_moneda'] ?>"> <?php echo $money10['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
            </td>
            <td>
                <select class="browser-default black-text" name="money11" id="money11">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money11 = mysqli_fetch_array($resultadomoneda11)):
		                  ?>
                        <option value="<?php echo $money11['id_moneda'] ?>"> <?php echo $money11['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
            </td>
            <td>
                <select class="browser-default black-text" name="money12" id="money12">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money12 = mysqli_fetch_array($resultadomoneda12)):
		                  ?>
                        <option value="<?php echo $money12['id_moneda'] ?>"> <?php echo $money12['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
            </td>
            <td>
                <select class="browser-default black-text" name="money13" id="money13">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money13 = mysqli_fetch_array($resultadomoneda13)):
		                  ?>
                        <option value="<?php echo $money13['id_moneda'] ?>"> <?php echo $money13['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select>
            </td>
            <td>
                <select class="browser-default black-text" name="money14" id="money14">
                        <br>
                        <option value="" disabled selected>Elije uno</option>
                        <?php
			                 while($money14 = mysqli_fetch_array($resultadomoneda14)):
		                  ?>
                        <option value="<?php echo $money14['id_moneda'] ?>"> <?php echo $money14['des_moneda'] ?></option>
                        <?php
				            endwhile;
                        ?>
                </select9
            </td>
        </tr>
                <tr class="#f44336 red">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Bono Whosale</td>
            <td><input type="text" name="bonowhosale1" id="bonowhosale1"></td>
            <td><input type="text" name="bonowhosale2" id="bonowhosale2"></td>
            <td><input type="text" name="bonowhosale3" id="bonowhosale3"></td>
            <td><input type="text" name="bonowhosale4" id="bonowhosale4"></td>
            <td><input type="text" name="bonowhosale5" id="bonowhosale5"></td>
            <td><input type="text" name="bonowhosale6" id="bonowhosale6"></td>
            <td><input type="text" name="bonowhosale7" id="bonowhosale7"></td>
        </tr>
        <tr>
            <td>Bono Retail</td>
            <td><input type="text" name="bonoretail1" id="bonoretail1"></td>
            <td><input type="text" name="bonoretail2" id="bonoretail2"></td>
            <td><input type="text" name="bonoretail3" id="bonoretail3"></td>
            <td><input type="text" name="bonoretail4" id="bonoretail4"></td>
            <td><input type="text" name="bonoretail5" id="bonoretail5"></td>
            <td><input type="text" name="bonoretail6" id="bonoretail6"></td>
            <td><input type="text" name="bonoretail7" id="bonoretail7"></td>
        </tr>
        <tr>
            <td>Accesorio - costo</td>
            <td><input type="text" name="costoacee1" id="costoacee1"></td>
            <td><input type="text" name="costoacee2" id="costoacee2"></td>
            <td><input type="text" name="costoacee3" id="costoacee3"></td>
            <td><input type="text" name="costoacee4" id="costoacee4"></td>
            <td><input type="text" name="costoacee5" id="costoacee5"></td>
            <td><input type="text" name="costoacee6" id="costoacee6"></td>
            <td><input type="text" name="costoacee7" id="costoacee7"></td>
        </tr>
        <tr>
            <td>Carroceria - otra conf.</td>
            <td><input type="text" name="anotherconfig1" id="anotherconfig1"></td>
            <td><input type="text" name="anotherconfig2" id="anotherconfig2"></td>
            <td><input type="text" name="anotherconfig3" id="anotherconfig3"></td>
            <td><input type="text" name="anotherconfig4" id="anotherconfig4"></td>
            <td><input type="text" name="anotherconfig5" id="anotherconfig5"></td>
            <td><input type="text" name="anotherconfig6" id="anotherconfig6"></td>
            <td><input type="text" name="anotherconfig7" id="anotherconfig7"></td>
        </tr>
        <tr>
            <td>Fletes-destino</td>
            <td><input type="text" name="fletdest1" id="fletdest1" ></td>
            <td><input type="text" name="fletdest2" id="fletdest2" ></td>
            <td><input type="text" name="fletdest3" id="fletdest3" ></td>
            <td><input type="text" name="fletdest4" id="fletdest4" ></td>
            <td><input type="text" name="fletdest5" id="fletdest5" ></td>
            <td><input type="text" name="fletdest6" id="fletdest6" ></td>
            <td><input type="text" name="fletdest7" id="fletdest7" ></td>
        </tr>
        <tr>
            <td>Fletes-costo</td>
            <td><input type="text" name="fletcosto1" id="fletcosto1" ></td>
            <td><input type="text" name="fletcosto2" id="fletcosto2" ></td>
            <td><input type="text" name="fletcosto3" id="fletcosto3" ></td>
            <td><input type="text" name="fletcosto4" id="fletcosto4" ></td>
            <td><input type="text" name="fletcosto5" id="fletcosto5" ></td>
            <td><input type="text" name="fletcosto6" id="fletcosto6" ></td>
            <td><input type="text" name="fletcosto7" id="fletcosto7" ></td>
        </tr>
        
    </tbody>
</table>
    <div class="#263238 blue-grey darken-4">
                    <h5 class="white-text">Financiamiento directo MTB</h5>
                </div>
    
<table>
    <tbody>
        
        <tr>
            <td>Enganche $</td>
            <td><input type="number" name="enganche1" id="enganche1" ></td>
            <td><input type="number" name="enganche2" id="enganche2" ></td>
            <td><input type="number" name="enganche3" id="enganche3" ></td>
            <td><input type="number" name="enganche4" id="enganche4" ></td>
            <td><input type="number" name="enganche5" id="enganche5" ></td>
            <td><input type="number" name="enganche6" id="enganche6" ></td>
            <td><input type="number" name="enganche7" id="enganche7" ></td>
        </tr>
        <tr>
            <td>Enganche %</td>
            <td><input type="number" name="engancheper1" id="engancheper1"></td>
            <td><input type="number" name="engancheper2" id="engancheper2"></td>
            <td><input type="number" name="engancheper3" id="engancheper3"></td>
            <td><input type="number" name="engancheper4" id="engancheper4"></td>
            <td><input type="number" name="engancheper5" id="engancheper5"></td>
            <td><input type="number" name="engancheper6" id="engancheper6"></td>
            <td><input type="number" name="engancheper7" id="engancheper7"></td>
        </tr>
        <tr>
            <td>Forma de amortizaci&oacute;n</td>
            <td><select class="browser-default black-text" name="amor1" id="amor1">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1 pago" >1 pago</option>
                <option value="mesualidades" >Mesualidades</option>
            </select></td>
            <td><select class="browser-default black-text" name="amor2" id="amor2">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1 pago" >1 pago</option>
                <option value="mesualidades" >Mesualidades</option>
            </select></td>
            <td><select class="browser-default black-text" name="amor3" id="amor3">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1 pago" >1 pago</option>
                <option value="mesualidades" >Mesualidades</option>
            </select></td>
            <td><select class="browser-default black-text" name="amor4" id="amor4">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1 pago" >1 pago</option>
                <option value="mesualidades" >Mesualidades</option>
            </select></td>
            <td><select class="browser-default black-text" name="amor5" id="amor5">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1 pago" >1 pago</option>
                <option value="mesualidades" >Mesualidades</option>
            </select></td>
            <td><select class="browser-default black-text" name="amor6" id="amor6">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1 pago" >1 pago</option>
                <option value="mesualidades" >Mesualidades</option>
            </select></td>
            <td><select class="browser-default black-text" name="amor7" id="amor7">
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1 pago" >1 pago</option>
                <option value="mesualidades" >Mesualidades</option>
            </select></td>
        </tr>
        <tr>
            <td>Plaso de pago o mensualidades</td>
            <td><select class="browser-default black-text" name="pagom1" id="pagom1">
                <option value="" disabled selected>Mensualidades</option>
                <option value="1 mes" >1 Mes</option>
                <option value="2 meses" >2 Meses</option>
                <option value="3 meses" >3 Meses</option>
                <option value="4 meses" >4 Meses</option>
                <option value="5 meses" >5 Meses</option>
                <option value="6 meses" >6 Meses</option>
            </select></td>
            <td><select class="browser-default black-text" name="pagom2" id="pagom2">
                <option value="" disabled selected>Mensualidades</option>
                <option value="1 mes" >1 Mes</option>
                <option value="2 meses" >2 Meses</option>
                <option value="3 meses" >3 Meses</option>
                <option value="4 meses" >4 Meses</option>
                <option value="5 meses" >5 Meses</option>
                <option value="6 meses" >6 Meses</option>
            </select></td>
            <td><select class="browser-default black-text" name="pagom3" id="pagom3">
                <option value="" disabled selected>Mensualidades</option>
                <option value="1 mes" >1 Mes</option>
                <option value="2 meses" >2 Meses</option>
                <option value="3 meses" >3 Meses</option>
                <option value="4 meses" >4 Meses</option>
                <option value="5 meses" >5 Meses</option>
                <option value="6 meses" >6 Meses</option>
            </select></td>
            <td><select class="browser-default black-text" name="pagom4" id="pagom4">
                <option value="" disabled selected>Mensualidades</option>
                <option value="1 mes" >1 Mes</option>
                <option value="2 meses" >2 Meses</option>
                <option value="3 meses" >3 Meses</option>
                <option value="4 meses" >4 Meses</option>
                <option value="5 meses" >5 Meses</option>
                <option value="6 meses" >6 Meses</option>
            </select></td>
            <td><select class="browser-default black-text" name="pagom5" id="pagom5">
                <option value="" disabled selected>Mensualidades</option>
                <option value="1 mes" >1 Mes</option>
                <option value="2 meses" >2 Meses</option>
                <option value="3 meses" >3 Meses</option>
                <option value="4 meses" >4 Meses</option>
                <option value="5 meses" >5 Meses</option>
                <option value="6 meses" >6 Meses</option>
            </select></td>
            <td><select class="browser-default black-text" name="pagom6" id="pagom6">
                <option value="" disabled selected>Mensualidades</option>
                <option value="1 mes" >1 Mes</option>
                <option value="2 meses" >2 Meses</option>
                <option value="3 meses" >3 Meses</option>
                <option value="4 meses" >4 Meses</option>
                <option value="5 meses" >5 Meses</option>
                <option value="6 meses" >6 Meses</option>
            </select></td>
            <td><select class="browser-default black-text" name="pagom7" id="pagom7">
                <option value="" disabled selected>Mensualidades</option>
                <option value="1 mes" >1 Mes</option>
                <option value="2 meses" >2 Meses</option>
                <option value="3 meses" >3 Meses</option>
                <option value="4 meses" >4 Meses</option>
                <option value="5 meses" >5 Meses</option>
                <option value="6 meses" >6 Meses</option>
            </select></td>
        </tr>
    </tbody>
</table>
        <div class="#263238 blue-grey darken-4">
                    <h5 class="white-text">Opreaci&oacute;n del concecionario</h5>
                </div>
<table>
    <tbody>
        
        <tr>
            <th>Datos generales</th>
        </tr>
        <tr>
            <td>Precio de venta al cliente final</td>
            <td><input type="number" name="preciofinal1" id="preciofinal1"></td>
            <td><input type="number" name="preciofinal2" id="preciofinal2"></td>
            <td><input type="number" name="preciofinal3" id="preciofinal3"></td>
            <td><input type="number" name="preciofinal4" id="preciofinal4"></td>
            <td><input type="number" name="preciofinal5" id="preciofinal5"></td>
            <td><input type="number" name="preciofinal6" id="preciofinal6"></td>
            <td><input type="number" name="preciofinal7" id="preciofinal7"></td>
        </tr>
        <tr>
            <td>Fecha de fact cliente final</td>
            <td><input type="date" name="enddate1" id="enddate1"></td>
            <td><input type="date" name="enddate2" id="enddate2"></td>
            <td><input type="date" name="enddate3" id="enddate3"></td>
            <td><input type="date" name="enddate4" id="enddate4"></td>
            <td><input type="date" name="enddate5" id="enddate5"></td>
            <td><input type="date" name="enddate6" id="enddate6"></td>
            <td><input type="date" name="enddate7" id="enddate7"></td>
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
            <td><input type="number" name="carrocosto1" id="carrocosto1"></td>
            <td><input type="number" name="carrocosto2" id="carrocosto2"></td>
            <td><input type="number" name="carrocosto3" id="carrocosto3"></td>
            <td><input type="number" name="carrocosto4" id="carrocosto4"></td>
            <td><input type="number" name="carrocosto5" id="carrocosto5"></td>
            <td><input type="number" name="carrocosto6" id="carrocosto6"></td>
            <td><input type="number" name="carrocosto7" id="carrocosto7"></td>
        </tr>
        <tr>
            <td>Accesorios - costo</td>
            <td><input type="number" name="accesocosto1" id="accesocosto1"></td>
            <td><input type="number" name="accesocosto2" id="accesocosto2"></td>
            <td><input type="number" name="accesocosto3" id="accesocosto3"></td>
            <td><input type="number" name="accesocosto4" id="accesocosto4"></td>
            <td><input type="number" name="accesocosto5" id="accesocosto5"></td>
            <td><input type="number" name="accesocosto6" id="accesocosto6"></td>
            <td><input type="number" name="accesocosto7" id="accesocosto7"></td>
        </tr>
        <tr>
            <td>otros costos</td>
            <td><input type="number" name="otrocosto1" id="otrocosto1"></td>
            <td><input type="number" name="otrocosto2" id="otrocosto2"></td>
            <td><input type="number" name="otrocosto3" id="otrocosto3"></td>
            <td><input type="number" name="otrocosto4" id="otrocosto4"></td>
            <td><input type="number" name="otrocosto5" id="otrocosto5"></td>
            <td><input type="number" name="otrocosto6" id="otrocosto6"></td>
            <td><input type="number" name="otrocosto7" id="otrocosto7"></td>
        </tr>
        <tr>
            <th>Comentarios Controlling Prices</th>
        </tr>
    </tbody>
</table>
<table>
    <tbody>
        <tr cols=50>
            <textarea name="testoim" id="testoim" <?php if($row2['roll']==1){ ?>  <?php }else{?> readonly <?php }?>>


            </textarea>
        </tr>
    </tbody>
</table>
                </form>
<table class="#263238 blue-grey darken-4">
    <tbody>
        <tr>
            <td class="white-text">Fecha de revicion: </td>
            <td class="white-text">Todays date: <?php echo date("d/m/Y")  ?></td>
            <td class="white-text" align="left"S>Solicitud para la negociacion especial(NE) version 2017.8</td>
        </tr>

        </tbody>
</table>
        

            </div> 
        </div>

            <div class="parallax"><img src="img/realback.jpg"></div>

</div>      
</div>
</div>
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
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
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
          $('.datepicker').pickadate({
            selectMonths:true, // Creates a dropdown to control month
            selectYears: 5,// Creates a dropdown of 15 years to control year
            dateFormat: 'yy',
            stepMonths: 12,
            
            });
    </script>
      <script id="source" language="javascript" type="text/javascript">
        $(".button-collapse").sideNav();
          
          
         
        
    
    function prelist(){
        var resulk;
        rp1=$("#resultadoBusqueda").val();
        rpc1=$("#resultadoca").val();
        resulk=parseInt(rp1)+parseInt(rpc1);
        
            $("#totalisimo").val(resulk);
    }
          
    function desc(){
        var deacuanto;
        
        des1=$("#psoli1").val();
        des2=$("#totalisimo").val();
        
        deacuanto=parseInt(des1)-parseInt(des2);
            $("#descu1").val(deacuanto);
    }
    function pordecu(){
        var porciento;
        
        porc1=$("#psoli1").val();
        porc2=$("#totalisimo").val();
        puerco1=parseFloat(porc1)*100;
        pasalo1=parseFloat(puerco1)/parseFloat(porc2);
        num1=pasalo1.toFixed(2);
        porciento=parseFloat(num1);
        
            $("#porciento1").val(porciento);
        
        
    }
          
          
          
    function sumar()
                {
                    var total;
                        n1=document.formane.uno.value;
                        n2=document.formane.dos.value;
                        n3=document.formane.tres.value;
                        n4=document.formane.cuatro.value;
                        n5=document.formane.cinco.value;
                        n6=document.formane.seis.value;
                        n7=document.formane.siete.value;
                total = parseInt(n1)+parseInt(n2)+parseInt(n3)+parseInt(n4)+parseInt(n5)+parseInt(n6)+parseInt(n7);
                    $("#total").val(total);
                }
          
          
          
                $(document).ready(function() {
                $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
                });

                function buscar() {
                var textoBusqueda ; 
                    a=  $("#busqueda").val();
                    textoBusqueda=parseInt(a);
                    
                
                if (textoBusqueda != "") {
                    $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
                    s = parseInt(mensaje);
                    $("#resultadoBusqueda").val(s);
                
                }); 
                } else { 
                $("#resultadoBusqueda").html('0');
                };
                };
          
          //Aqui inicia las funciones para buscar la carroceriañ
          
          $(document).ready(function() {
                $("#resultadoca").html('0');
                });

                function buscarca() {
                var textoBusquedaca ; 
                    aca=  $("#carroceria1").val();
                    textoBusquedaca=parseInt(aca);
                    
                
                if (textoBusquedaca != "") {
                    $.post("buscarcarro.php", {valorBusquedaca: textoBusquedaca}, function(mensajeca) {
                    sca = parseInt(mensajeca);
                    $("#resultadoca").val(sca);
                
                }); 
                } else { 
                $("#resultadoca").html('0');
                };
                };
          
          
          
          
          
            </script>
  </html>