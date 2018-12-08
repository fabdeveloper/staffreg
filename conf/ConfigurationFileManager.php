<?php


if(isset($_POST['operacion'])){
	
	require 'ConfigurationFileObject.php';	
	$confFileObject = new ConfigurationFileObject();
	
	require 'emailAddressReader.php';
	$confFileObject->set_emailtoaddress($emailtoaddress);
	
	require 'ImageManagerObject.php';
	$imageManagerObject = new ImageManagerObject();
	
	
	
	$var = $_POST['operacion'];
	switch($var){
		case 'loadconf':
			$confFileObject->loadFile($_FILES);
			break;
		case 'downloadconf':
			$confFileObject->sendConfigurationFile();				
			break;
		case 'reset':
			$confFileObject->reset();		
		break;
			
		case 'loadimage':
			$imageManagerObject->loadFile($_FILES);		
			break;
		case 'deleteallimages':
			$imageManagerObject->deleteAllImages();			
		break;
			default:;
	}
	
}


?>


<!DOCTYPE html>
<html>

<!-- 
<head>
<meta charset="UTF-8">
<title>Web Serie - Configuration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../public/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../public/assets/css/noscript.css" /></noscript>
</head>


 -->

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Configuration Manager</title>


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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body style="height: 268px; ">

	<div class="content">
	<div class="split style1">
								<section>
	<div class="fields">
		<div class="field half">	
	
	<form enctype="multipart/form-data" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	              <div class="form-group">
	
		<input type="hidden" name="operacion" value="loadconf"><input name="userfile" type="file" /><input type="submit" value="Cargar archivo de configuracion">
		              </div>
	</form>
	
	</div>
	<div class="field half">
	
	<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="downloadconf"><input type="submit" value="Descargar archivo de configuracion">
	</form>
	
	</div>
		<div class="field half">
	
	<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="reset"><input type="submit" value="RESET - esto borrará la configuracion actual">
	</form>
	
	</div>
	
		<div>
			<form enctype="multipart/form-data" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="loadimage"><input name="userfile" type="file" /><input type="submit" value="Cargar Imagen">
	</form>
	</div>
		<div>	<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type="hidden" name="operacion" value="deleteallimages"><input type="submit" value="Borrar todas las imagenes">
	</form>
	</div>
</div>

</section>
</div>	
	</div>	
	
	
</body>
</html>


