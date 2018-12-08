<?php


if(isset($_POST['email'])){

	echo "<br><br><br><br><br><br><br><br>INICIANDO ...<br>";


	$id_inscripcion = $_POST['id_inscripcion'];
	$nombre = $_POST['nombre'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$poblacion = $_POST['poblacion'];
	$codigo_postal = $_POST['codigo_postal'];
	$dni = $_POST['dni'];
	$vehiculo = $_POST['vehiculo'];
	$ingles = $_POST['ingles'];
	$aleman = $_POST['aleman'];
	$catalan = $_POST['catalan'];
	$limpieza = $_POST['limpieza'];
	$cuidado_mayores = $_POST['cuidado_mayores'];
	$cuidado_ninos = $_POST['cuidado_ninos'];
	$cocina = $_POST['cocina'];
	$plancha = $_POST['plancha'];
	$exp_limpieza = $_POST['exp_limpieza'];
	$exp_cuidado_mayores = $_POST['exp_cuidado_mayores'];
	$exp_cuidado_ninos = $_POST['exp_cuidado_ninos'];
	$exp_cocina = $_POST['exp_cocina'];
	$exp_plancha = $_POST['exp_plancha'];
	$exp_otros = $_POST['exp_otros'];
	$comentarios = $_POST['comentarios'];
	$foto = $_POST['foto'];


	require_once '../public/InscripcionAsistenteObject.php';
	echo "cargado InscripcionAsistenteObject";

	$inscripcionAsistenteObject = new InscripcionAsistenteObject();
	$inscripcionAsistenteObject->set($id_inscripcion, $nombre, $fecha_nacimiento, $email, $telefono, $direccion, $poblacion, $codigo_postal, $dni, $vehiculo, $ingles, $aleman, $catalan, $limpieza, $cuidado_mayores, $cuidado_ninos, $cocina, $plancha, $exp_limpieza, $exp_cuidado_mayores, $exp_cuidado_ninos, $exp_cocina, $exp_plancha, $exp_otros, $comentarios, $foto);



	echo "cadena insert = " . $inscripcionAsistenteObject->getStringDbInsert();

	require '../bd/DBManager.php';

// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "nomelase";
// 	$dbname = "Test_Environment";
	
	$servername = "localhost";
	$username = "id6656439_fabdeveloper";
	$password = "Nomelase'1";
	$dbname = "id6656439_alfa";
	
	

	$dbManager = new DBManager($servername, $username, $password, $dbname);
	$dbManager->init();

	if($dbManager->executeQuery($inscripcionAsistenteObject->getStringDbInsert())){
		echo "<br>INSERTADO<br>";
	}else{
		echo "<br> ERROR : NO INSERTADO<br>";

	}

}else{

	echo "post no inicializado<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Limpio Mallorca - Registrate</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">


</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->




<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="section-title">
          <h2>Registrate</h2>
          <p>Cuál es tu experiencia laboral y que tipo de trabajo te interesa ? </p>
        </div>
        <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"  enctype="multipart/form-data"  name="sentMessage" id="contactForm" novalidate>

          
          <div class="form-group">
            <textarea name="exp_limpieza" id="exp_limpieza" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de limpieza ?" ></textarea>
          </div>
         <div class="form-group">
            <textarea name="exp_cuidado_mayores" id="exp_cuidado_mayores" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de cuidado de personas mayores ?" ></textarea>
          </div>


          
          <button type="submit" class="btn btn-custom btn-lg">Enviar</button>
          
        </form>
      </div>
    </div>
    


  </div>
</div>



<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; Limpio Mallorca. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>

</body>
</html>
