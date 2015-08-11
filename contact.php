<?php
	//Script PHP que se ejecuta en el server y envia el Mail
	// $frm = $_POST['frm'];

	// if (isset($frm) && $frm !== '') {
		// if ($frm == 'contact') {
			$Nombre = $_POST['nombre'];
			$Email = $_POST['email'];
			$Mensaje = $_POST['mensajito'];
			$Destino = 'kin3xc@hotmail.com';

			// $mensaje = $Mensaje;
			$Mensaje.= "\n\n------------------------";
			$Mensaje.= "\nEnviado por: ". $Nombre;
			$Mensaje.= "\nCorreo: " . $Email;

			//Ingresamos nuestra casilla de correo
			$Asunto = "Mensaje enviado por: ". $Nombre;
			if(mail($Destino, $Asunto, $Mensaje,"FROM: $Email")){
				$respuesta = true;
			}else{
				$respuesta = false;
			}

		// }else{
		// 	$respuesta = false;
		// }
		// header('Content-type: application/json; charset=utf-8');
		// echo json_encode($respuesta, JSON_FORCE_OBJECT);
		echo $respuesta;
	// }
?>