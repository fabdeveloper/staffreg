<?php


class InscripcionAsistenteObject{
	
			private $id_inscripcion = -1;
			private $nombre;
			private $fecha_nacimiento;
			private $email;
			private $telefono;
			private $direccion;
			private $poblacion;
			private $codigo_postal;
			private $dni;
			private $vehiculo = 0;
			private $ingles = 0;
			private $aleman = 0;
			private $catalan = 0;
			private $limpieza = 0;
			private $cuidado_mayores = 0;
			private $cuidado_ninos = 0;
			private $cocina = 0;
			private $plancha = 0;
			private $exp_limpieza;
			private $exp_cuidado_mayores;
			private $exp_cuidado_ninos;
			private $exp_cocina;
			private $exp_plancha;
			private $exp_otros;
			private $comentarios;
			private $foto = "no_informado";
			
			
			public function set( $id_inscripcion, $nombre,$fecha_nacimiento,$email, $telefono, $direccion,
 								$poblacion, $codigo_postal, $dni, $vehiculo, $ingles, $aleman, $catalan, $limpieza,
 								$cuidado_mayores, $cuidado_ninos, $cocina, $plancha, $exp_limpieza, $exp_cuidado_mayores,
 								$exp_cuidado_ninos, $exp_cocina, $exp_plancha, $exp_otros, $comentarios, $foto){
				
 									$this->id_inscripcion = $id_inscripcion;
 									$this->nombre = $nombre;
 									$this->fecha_nacimiento = $fecha_nacimiento;
 									$this->email = $email;
 									$this->telefono = $telefono;
 									$this->direccion = $direccion;
 									$this->poblacion = $poblacion;
 									$this->codigo_postal = $codigo_postal;
 									$this->dni = $dni;
 									$this->vehiculo = $vehiculo;
 									$this->ingles = $ingles;
 									$this->aleman = $aleman;
 									$this->catalan = $catalan;
 									$this->limpieza = $limpieza;
 									$this->cuidado_mayores = $cuidado_mayores;
 									$this->cuidado_ninos = $cuidado_ninos;
 									$this->cocina = $cocina;
 									$this->plancha = $plancha;
 									$this->exp_limpieza = $exp_limpieza;
 									$this->exp_cuidado_mayores = $exp_cuidado_mayores;
 									$this->exp_cuidado_ninos = $exp_cuidado_ninos;
 									$this->exp_cocina = $exp_cocina;
 									$this->exp_plancha = $exp_plancha;
 									$this->exp_otros = $exp_otros;
 									$this->comentarios = $comentarios;
 									$this->foto = $foto;
				
			}
			
			public function setPost($postvar){
				
				if(isset($postvar['id_inscripcion']))$this->id_inscripcion = $postvar['id_inscripcion'];
				if(isset($postvar['nombre']))$this->nombre = $postvar['nombre'];
				if(isset($postvar['fecha_nacimiento']))$this->fecha_nacimiento = $postvar['fecha_nacimiento'];
				if(isset($postvar['email']))$this->email = $postvar['email'];
				if(isset($postvar['telefono']))$this->telefono = $postvar['telefono'];
				if(isset($postvar['direccion']))$this->direccion = $postvar['direccion'];
				if(isset($postvar['poblacion']))$this->poblacion = $postvar['poblacion'];
				if(isset($postvar['codigo_postal']))$this->codigo_postal = $postvar['codigo_postal'];
				if(isset($postvar['dni']))$this->dni = $postvar['dni'];
				if(isset($postvar['vehiculo']))$this->vehiculo = $postvar['vehiculo'];
				if(isset($postvar['ingles']))$this->ingles = $postvar['ingles'];
				if(isset($postvar['aleman']))$this->aleman = $postvar['aleman'];
				if(isset($postvar['catalan']))$this->catalan = $postvar['catalan'];
				if(isset($postvar['limpieza']))$this->limpieza = $postvar['limpieza'];
				if(isset($postvar['cuidado_mayores']))$this->cuidado_mayores = $postvar['cuidado_mayores'];
				if(isset($postvar['cuidado_ninos']))$this->cuidado_ninos = $postvar['cuidado_ninos'];
				if(isset($postvar['cocina']))$this->cocina = $postvar['cocina'];
				if(isset($postvar['plancha']))$this->plancha = $postvar['plancha'];
				if(isset($postvar['exp_limpieza']))$this->exp_limpieza = $postvar['exp_limpieza'];
				if(isset($postvar['exp_cuidado_mayores']))$this->exp_cuidado_mayores = $postvar['exp_cuidado_mayores'];
				if(isset($postvar['exp_cuidado_ninos']))$this->exp_cuidado_ninos = $postvar['exp_cuidado_ninos'];
				if(isset($postvar['exp_cocina']))$this->exp_cocina = $postvar['exp_cocina'];
				if(isset($postvar['exp_plancha']))$this->exp_plancha = $postvar['exp_plancha'];
				if(isset($postvar['exp_otros']))$this->exp_otros = $postvar['exp_otros'];
				if(isset($postvar['comentarios']))$this->comentarios = $postvar['comentarios'];
				if(isset($postvar['foto']))$this->foto = $postvar['foto'];
				
			}
			
			public function getStringDbInsert(){
				$cadena = "INSERT INTO inscripcion_asistente(nombre,fecha_nacimiento,email,telefono," .
							"direccion,poblacion,codigo_postal,dni,vehiculo,ingles,aleman,catalan,limpieza," .
							"cuidado_mayores,cuidado_ninos,cocina,plancha,exp_limpieza,exp_cuidado_mayores," .
							"exp_cuidado_ninos,exp_cocina,exp_plancha,exp_otros,comentarios,foto)" .
							" VALUES('" .
							//$this->id_inscripcion . ",'" .
							$this->nombre . "','" .
							$this->fecha_nacimiento . "','" .
							$this->email . "','" .
							$this->telefono . "','" .
							$this->direccion . "','" .
							$this->poblacion . "','" .
							$this->codigo_postal . "','" .
							$this->dni . "'," .
							$this->vehiculo . "," .
							$this->ingles . "," .
							$this->aleman . "," .
							$this->catalan . "," .
							$this->limpieza . "," .
							$this->cuidado_mayores . "," .
							$this->cuidado_ninos . "," .
							$this->cocina . "," .
							$this->plancha . ",'" .
							$this->exp_limpieza . "','" .
							$this->exp_cuidado_mayores . "','" .
							$this->exp_cuidado_ninos . "','" .
							$this->exp_cocina . "','" .
							$this->exp_plancha . "','" .
							$this->exp_otros . "','" .
							$this->comentarios . "','" .
							$this->foto .				
							"')";				
				
				return $cadena;
			}
	
	
	
	
}


?>
