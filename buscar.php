<?php
require("connection.php");
//Variable de búsqueda
//$consultaBusqueda = $_GET['valorBusqueda'];
$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);


//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";



//Comprueba si $consultaBusqueda está seteado
if (isset($consultaBusqueda)) {

	//Selecciona todo de la tabal producvto
    $sql="SELECT * FROM `producto` WHERE `id_producto` = '$consultaBusqueda'";
   //$sql2="SELECT * FROM `producto` WHERE `id_producto` = '$consultaBusqueda2'";
	
    $consulta = mysqli_query($link, $sql);
   //$consulta2 = mysqli_query($link, $sql2);
	

	//Obtiene la cantidad de filas que hay en la consulta
	$filas = mysqli_num_rows($consulta);
	//$filas2 = mysqli_num_rows($consulta2);

	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($filas === 0) {
		$mensaje = "0";

    }else{
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		while($resultados = mysqli_fetch_array($consulta)):
			$precio = $resultados['precio_camion'];

			//Output
			$mensaje .= $precio;

		endwhile;

	}; //Fin else $filas

};//Fin isset $consultaBusqueda

//Devolvemos el mensaje que tomará jQuery
echo $mensaje;
?>