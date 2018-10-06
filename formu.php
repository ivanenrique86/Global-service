<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
<?php include("menu.php");?>
</head>

<body>
	<?php
	echo "Formulario de Ingreso";
	?>
	<hr>
<form action="" method="">
	<fieldset>
	<legend>Datos personales</legend>
	<label>Nombre:</label>
		<input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
	<label>Edad:</label>
		<input type="number" name="edad" min="15" max="50" readonly>
			<input type="date">
		<label>Apellido Paterno</label>
		<input type="text" name="Apellido paterno">
	<label>Apellido Materno</label>
		<input type="text" name="Apellido materno">
	<label>Password:</label>
	<input type="password" name="piola" placeholder="Password de 5 a 10 digitos"   min="5" max="10">
	<label>Correo:</label>
	<input type="email" name="correo">
	<label>Etnia:</label>
	<select name="etnia">
		<option selected value="0"></option>
		<option value="1">Mapuche</option>
		<option value="2">Diaguitas</option>
		<option value="3">Colocolinos</option>
		<option value="madres">madres</option>
	
	</select>
	<textarea></textarea>
	
	</fieldset>	
	<fieldset><legend>Seleccione Sexo:</legend>
	<label>femenino</label><input type="radio" name="sexo" value="femenino">
	<label>Masculino</label><input type="radio" name="sexo" value="Masculino">
	</fieldset>
	
	<button type="reset" onClick="">Resert</button>
	<button type="button" onClick="" value="gggg">Modificar</button>
	<a href="login.html"><button type="submit" value="Guardar"><a href="menu.php"></a>Guardar</button></a>
	</form>
	<hr>
	
	
</body>
</html>