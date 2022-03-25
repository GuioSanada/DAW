package com.prueba4;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import com.prueba4.Modelos.Persona;
import com.prueba4.Util.DatabaseConnection;

/**
 * Servlet implementation class ProcesarPersona
 */
public class ProcesarPersona extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ProcesarPersona() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doPost(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		String nombre = request.getParameter("nombre");
		String apellidos = request.getParameter("apellidos");
		String edad = request.getParameter("edad");
		int edadInt = Integer.parseInt(edad);
		
		Persona p = new Persona(nombre, apellidos, edadInt);
		
		request.setAttribute("persona", p);
		
		// Se prepara un objeto DatabaseConnection. Esto es para preparar los datos de la  DB
		DatabaseConnection dbConnection = new DatabaseConnection();
		// Se crea la conexion que se manejara con un objeto Connection
		Connection connection = dbConnection.getConnection();
		// cadena de la instruccion sql 
		String query = "insert into personas (nombre, apellidos, edad) values (?, ?, ?)";
		
		try {
			// Se crea objeto PreparedStatement que es el que usa la conexion para realizar la consulta SQL
			PreparedStatement preparedStatement = connection.prepareStatement(query);
			preparedStatement.setString(1, nombre);
			preparedStatement.setString(2, apellidos);
			preparedStatement.setInt(3, edadInt);
			preparedStatement.executeUpdate();
			
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		String url = "/Personas/MostrarPersona.jsp";
		getServletContext()
		.getRequestDispatcher(url)
		.forward(request, response);
		
		
	}

}
