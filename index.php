<?php
function ShowPhp($welcome,$content,$footer)
{
	# code...
	$postdata = http_build_query(
    array(
        'welcome' => $welcome,
        'content' => $content,
        'footer'  => $footer
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);

$context  = stream_context_create($opts);

$result = file_get_contents('http://localhost/phpmailer/mq_welcome.php', false, $context);
echo $result;
}

 //send data and get the returned content

//Bienvenida
ShowPhp('GRACIAS POR DESCARGAR<br>NUESTRA APP','<p style="margin-top: 10px"> 
																	    	 <br>¡Hola!<br><br>Gracias por descargar nuestra app, los datos que nos autorizaste al momento de realizar tu registro a través del escaneo de cédula fueron:</p>
																		    <h3>NOMBRE: <span>Danny Rojas</span></h3>
																		    <h3>CÉDULA: <span>1.093.786.701</span></h3>
																		    <h3>FECHA DE NACIMIENTO: <span> 28/07/96</span></h3>
																		    <h3>GÉNERO: <span>Masculino (?)</span></h3>
																		    <h3>CORREO ELECTRONICO: <span>rojas2895@gmail.com</span></h3>
																		    <h3>FECHA Y AUTORIZACIÓN: <span> 24/08/18 11:10pm</span></h3>
																		    <p>Si alguno de los datos no corresponde, puedes dar<br>
																		    click abajo para que los diligencies correctamente</p><br>
																		    <button class="UpdateData"> ¡Actualiza tus Datos!</button> 
																			<br>    
																			<br><p><em>
		Los Puntos SU+ ganados se verán reflejados en tu cuenta en los próximos 5 días hábiles. Para conocer los términos y condiciones del Sistema de Puntos SU+ ingresa a www.mundosumas.com/terminos.</em>
	</p>','lorem impsum'

	);

ShowPhp('ACTIVA<br>TU CUENTA','<br><br><p style="margin-top:50px">¡Hola!<br><br>Te invitamos activar tu cuenta para que ingreses a nuestra APP y disfrutes aún más ser parte de SU+. </p><br><br><br><button class="UpdateData" style="    margin-left: 42%;"> ¡Actívala!</button> <br>  <br><br>     <br><br><br>','');

ShowPhp('REESTABLECE<br>TU CONTRASEÑA','<br><br><p style="margin-top:50px">¡Hola!<br><br>Recibimos una solicitud para reestablecer tu contraseña registrada con el usuario: <b>dannyrojas28</b><br><br>

Si no has realizado esta solicitud o has recordado tu contraseña,<br> omite este correo.
 </p><br><br><button class="UpdateData" style="    margin-left: 40%;"> ¡Restablecer!</button> <br>  <br>  <br><br>  <br>','');


ShowPhp('GANASTE<br> PUNTOS SU+',
	'<p style="margin-top:15px">
			<br>¡Hola!<br><br>El usuario <b>dannyrojas28</b> utilizó <br>tu código de referidos y acabas de ganar:
	 </p> <br>
	<h3 style="font-size:42px;color:orange">5.000<br> <img src="img/puntossumas.png" ></h3>

	<button class="UpdateData" style="margin-left: 37%;"> 
	  ¡Conoce más!
	</button> 
	<br>   <br>
	<p><em>
		Los Puntos SU+ ganados se verán reflejados en tu cuenta en los próximos 5 días hábiles. Para conocer los términos y condiciones del Sistema de Puntos SU+ ingresa a www.mundosumas.com/terminos.</em>
	</p><br><br><br>',''
	);


ShowPhp('GRACIAS POR<br> REGISTRARTE',
	'<p style="margin-top:5px">
			<br>¡Hola!<br><br>Gracias por registrarte a SU+ a través de nuestra app, por tu registro exitoso acabas de ganar: 
	 </p> <br>
	<h3 style="font-size:42px;color:orange">5.000 <br><img src="img/puntossumas.png" style="margin-bottom: -5px;"></h3>
	<p>
		Los datos que nos autorizaste al momento de realizar tu registro a través del escaneo de cédula fueron:
	</p>
	<h3>NOMBRE: <span>Danny Rojas</span></h3>
	<h3>CÉDULA: <span>1.093.786.701</span></h3>
	<h3>FECHA DE NACIMIENTO: <span> 28/07/96</span></h3>
	<h3>GÉNERO: <span>Masculino (?)</span></h3>
	<h3>CORREO ELECTRONICO: <span>rojas2895@gmail.com</span></h3>
	<h3>FECHA Y AUTORIZACIÓN: <span> 24/08/18 11:10pm</span></h3>
	<p>Si quieres hacer cambios en la información escaneada de tu cédula <br>debes diligenciar el formulario de actualización de datos a través de tu APP</p><br><br>
	<button class="UpdateData"> ¡Actualiza tus Datos!</button> <br><p><em>
		Los Puntos SU+ ganados se verán reflejados en tu cuenta en los próximos 5 días hábiles. Para conocer los términos y condiciones del Sistema de Puntos SU+ ingresa a www.mundosumas.com/terminos.</em>
	</p>','lorem impsum'
	);



?>