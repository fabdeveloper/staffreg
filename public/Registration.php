<?php


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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Limpio Mallorca</a> </div>
    

  </div>
</nav>



<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-12">
      <div class="row">
        <div class="section-title">
          <h2>Registrate</h2>
          <p>Cuál es tu experiencia laboral y que tipo de trabajo te interesa ? </p>
        </div>
        <form action="RegManager.php" method="post" >
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="Fecha de nacimiento (dd-mm-aaaa)" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>       
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="dni" id="dni" class="form-control" placeholder="Dni" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>   
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="poblacion" id="poblacion" class="form-control" placeholder="Poblacion" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="codigo_postal" id="codigo_postal" class="form-control" placeholder="Codigo Postal" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          
          
          
          
          
          
          
          
          
             
    
          <div class="row">
          	<div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="vehiculo"  name="vehiculo" value="1"> Dispongo de vehiculo<br>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="ingles"  name="ingles" value="1"> Hablo Ingles<br>
              </div>
            </div>
         </div> 
          <div class="row">
          	<div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="aleman"  name="aleman" value="1"> Hablo Aleman<br>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="catalan"  name="catalan" value="1"> Hablo Catalan<br>
              </div>
            </div>
         </div> 
         
        <div class="section-title">
                  <p></p>        
          <p>Selecciona el trabajo que te interesa </p>
        </div>
        
                 
         <div class="row">
          	<div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="limpieza"  name="limpieza" value="1"> Trabajos de limpieza<br>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="cuidado_mayores"  name="cuidado_mayores" value="1"> Cuidado de personas mayores<br>
              </div>
            </div>
         </div> 
         <div class="row">
          	<div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="cuidado_ninos"  name="cuidado_ninos" value="1"> Cuidado de niños<br>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="cocina"  name="cocina" value="1"> Trabajos de cocina<br>
              </div>
            </div>
         </div> 
         <div class="row">
          	<div class="col-md-6">
              <div class="form-group">      
          		<input type="checkbox" id="plancha"  name="plancha" value="1"> Trabajos de plancha<br>
              </div>
            </div>
         
         </div> 

            
        <div class="section-title">
                  <p></p>        
          <p> </p>
        </div>
        
        
                    
          
          <div class="form-group">
            <textarea name="exp_limpieza" id="exp_limpieza" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de limpieza ?" ></textarea>
          </div>
         <div class="form-group">
            <textarea name="exp_cuidado_mayores" id="exp_cuidado_mayores" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de cuidado de personas mayores ?" ></textarea>
          </div>
         <div class="form-group">
            <textarea name="exp_cuidado_ninos" id="exp_cuidado_ninos" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de cuidado de niños ?" ></textarea>
          </div>
          <div class="form-group">
            <textarea name="exp_cocina" id="exp_cocina" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de cocina ?" ></textarea>
          </div>
          <div class="form-group">
            <textarea name="exp_plancha" id="exp_plancha" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de plancha ?" ></textarea>
          </div>
         <div class="form-group">
            <textarea name="exp_otros" id="exp_otros" class="form-control" rows="4" placeholder="Cual es tu experiencia en trabajos de otro tipo ?" ></textarea>
          </div>
         <div class="form-group">
            <textarea name="comentarios" id="comentarios" class="form-control" rows="4" placeholder="Comentarios" ></textarea>
          </div>

          
          
          
          
          
          
          
          <div class="button">
          <button type="submit" class="btn btn-custom btn-lg">Enviar</button>
          </div>
          <p>No compartimos tus datos personales. 

Al continuar navegando aceptas la politica de privacidad y uso de datos de este sitio web. Responsable de los datos: Limpio Mallorca   || Uso: Administración del formulario presente. || Legalidad: Sin tu consentimiento no se hace nada. || Quién recibe estos datos: No se cede los datos a nadie. || Tus derechos: Si en cualquier momento quieres acceder a tus datos, modificarlos o eliminarlos, solo tienes que pedirlo.</p>
          
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

<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/main.js"></script>


</body>
</html>
