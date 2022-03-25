<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<form action="../ProcessIva" method="post">
		<label>Nombre producto: </label>
		<input type="text" name="nombre"><br><br>
		
		<label>Precio:</label>
		<input type="text" name="precio"><br><br>
		
		<label>IVA:</label>
		<select type="text" name="iva">
			<option value = "4">4%</option>
			<option value = "12">12%</option>
			<option value = "21">21%</option>
		</select><br><br>
		
		<input type="submit" value="Enviar" name="Crear">
	</form>
</body>
</html>