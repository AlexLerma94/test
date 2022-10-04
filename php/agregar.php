<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta http-equiv="Content-Type"; charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<!-- ------------- ESTILO ----------------------------------->
	<style type="text/css">
		*{margin:1; padding:0; }
		
		html{background-color: RGB(238, 232, 170);}
		
		body { width: 1024px; height: auto ; margin: auto; background-color: RGB(161, 130, 98);
		font: 14px/21px "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif; }
		
		th{background-color: #DFFB86;}
		td{background-color: #DFFB86;}
		ul{color:yellow;}
		a{color:green; text-decoration: none;}
		
		/* RESET AL FOCUS .... SITIO O ESPACIO DONDE SE UBICA EL APUNTADOR */
		*:focus { outline: none;
		}
		
		/* ------------------------ TIPOGRAFIA O FONTS */
		
		h2, . label { font-family: Georgia, Times, "Times New Roman", serif; }
		
		.form_hint, .required_notification { font-size: 11px; }
		
		/* ------------------------ ESTILO DE LAS LISTAS */
		ul { width: 750px; list-style-type: none;
			list-style-position: outside; margin: 0px; padding: 0px; }
			
		li {
			padding: 12px; border-bottom: 1px solid #eee;
			position: relative; }
			
		/* LA PSEUDO-CLASE CSS */
		li:first-child, li:last-child { border-bottom: 1px solid #777; }
		
		/* ----------------------- CABECERA */
		h2 { margin: 0; display: inline; }
		
		.required_notification { color: #d45252; margin: 5px 0 0 0; display: inline;
			float: right; }
			
		/* ---------------------- ELEMENTOS DE LA FORMA */
		label {
			width: 150px; margin-top: 3px; display: inline-block; float: left; padding: 3px;
		}
		
		input {
			height: 30px; width: 220px; padding: 5px 8px; }
			
		button { margin-left: 156px; width:50px; height:100px}
		
		/* --------------------- HINT O AYUDA PARA LLENADO */
		
		.form_hint { background: #d45252; /* rojo */
			border-radius: 3px 3px 3px 3px; color: white; margin-left: 8px;
			padding: 1px 6px; z-index: 999; position: absolute; display: none; }
			
		.form_hint::before {
			content: "\25C0"; color: #d45252; /* rojo */ position: absolute;
			top: 1px; left: -6px; }
			
		input:focus + .form_hint { display: inline; }
		
		input:required:valid + .form_hint { background: #28921f; }
		
		input:required:valid + .form_hint::before { color: #28921f; }
		
		/* ------------------ ESTILO DEL BOTON Y ESTADOS */
		
		button.submit {
			background-color: #68b12f;
			background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
			background: -webkit-linear-gradient(top, #68b12f, #50911e);
			background: -moz-linear-gradient(top, #68b12f, #50911e);
			background: -ms-linear-gradient(top, #68b12f, #50911e);
			background: -o-linear-gradient(top, #68b12f, #50911e);
			background: linear-gradient(top, #68b12f, #50911e);
			border: 1px solid #509111; border-bottom: 1px solid #5b992b;
			
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			-ms-border-radius: 3px;
			-o-border-radius: 3px;
			
			box-shadow: inset 0 1px 0 0 #9fd574;
			-webkit-box-shadow: 0 1px 0 0 #9fd574 inset;
			-moz-box-shadow: 0 1px 0 0 #9fd574 inset;
			-ms-box-shadow: 0 1px 0 0 #9fd574 inset;
			-o-box-shadow: 0 1px 0 0 #9fd574 inset;
			color: white; font-weight: bold;
			padding: 6px 20px; text-align: center;
			text-shadow: 0 -1px 0 #396715; }
			
		button.submit:hover { opacity: .85; cursor: pointer; }
		
		button.submit:active { border: 1px solid #20911e;
			box-shadow: 0 0 10px 5px #356b0b inset;
			-webkit-box-shadow: 0 0 10px 5px #356b0b inset;
			-moz-box-shadow: 0 0 10px 5px #356b0b inset;
			-ms-box-shadow: 0 0 10px 5px #356b0b inset;
			-o-box-shadow: 0 0 10px 5px #356b0b inset;
			
	</style>
	<!-------------------------- FIN ESTILO --->

</head>
	<body>
		<center><br><br>
		<h1>Registro de Empleados</h1>
			<form action="guardar.php" method="POST" enctype="multipart/form-data"><br><br>
				<ul>
					<li><h2>Detalles</h2>
						<span class="required_notification">* Datos requeridos</span>
					</li>
					
					<li><label for="nom_per">Nombre:</label>
						<input type="text" name="nom_per" placeholder="Nombre" maxlength="30" required />
						<span class="form_hint">Formato: "Felipe"</span>
					</li>
					
					<li><label for="ape_per">Apellidos:</label>
						<input type="text" name="ape_per" placeholder="apellidos" maxlength="30" required />
						<span class="form_hint">Formato: "Soriano Paz"</span>
					</li>
					
					<li><label for="gen_per">Genero:</label>
						<input type="text" name="gen_per" placeholder="genero" maxlength="30" required />
						<span class="form_hint">Formato: "masculino"</span>
					</li>
					
					<li><label for="cur_per">CURP:</label>
						<input type="text" name="cur_per" placeholder="curp" maxlength="30" required />
						<span class="form_hint">Formato: "FABN880802MMSNRD07"</span>
					</li>
					
					<li><label for="dir_per">Direccion:</label>
						<input type="text" name="dir_per" placeholder="direccion" maxlength="30" required />
						<span class="form_hint">Formato: "calle del arbol..."</span>
					</li>
					
					<li><label for="ciu_per">Ciudad:</label>
						<input type="text" name="ciu_per" placeholder="ciudad" maxlength="30" required />
						<span class="form_hint">Formato: "Ciudad Altamirano..."</span>
					</li>
					
					<li><label for="ser_per">Servicio Medico:</label>
						<input type="text" name="ser_per" placeholder="servicio medico" maxlength="30" required />
						<span class="form_hint">Formato: "IMSS ISSSTE"</span>
					</li>
					
					<li><label for="est_per">Estado Civil:</label>
						<input type="text" name="est_per" placeholder="estado civil" maxlength="30" required />
						<span class="form_hint">Formato: "Casado Soltero..."</span>
					</li>
					
					<li><label for="hij_per">Num. hijos:</label>
						<input type="text" name="hij_per" placeholder="hijos" maxlength="30" required />
						<span class="form_hint">Formato: "1 2 3..."</span>
					</li>
					
					<li><label for="img_per">Foto:</label>
						<input type="file" name="img_per" placeholder="foto" maxlength="30" required />
						<span class="form_hint">Formato: "cargar imagen"</span>
					</li>
					
					<input type="submit" value="Aceptar"/>
				</ul>
			</form><br><br>
		</center>
	</body>
</html>