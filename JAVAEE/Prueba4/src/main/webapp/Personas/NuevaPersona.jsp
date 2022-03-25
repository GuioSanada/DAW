<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<h2>Nueva Persona</h2>
	<form action="../ProcesarPersona" method="post">
		<label>Name: </label>
		<input type="text" name="nombre"><br><br>
		
		<label>Apellidos:</label>
		<input type="text" name="apellidos"><br><br>
		
		<label>Edad:</label>
		<input type="text" name="edad"><br><br>
		
		<input type="submit" value="Enviar" name="Crear">
	</form>
</body>
</html>