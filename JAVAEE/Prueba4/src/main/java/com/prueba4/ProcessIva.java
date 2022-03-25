package com.prueba4;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import java.io.IOException;

import com.prueba4.Util.Impuestos;

/**
 * Servlet implementation class ProcessIva
 */
public class ProcessIva extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ProcessIva() {
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
		String precio = request.getParameter("precio");
		String iva = request.getParameter("iva");
		
		double precio_double = Double.parseDouble(precio);
		int iva_int = Integer.parseInt(iva);
		
		double precio_total = Impuestos.getPrecioTotal(precio_double, iva_int);
		
		request.setAttribute("nombre", nombre);
		request.setAttribute("precioTotal", precio_total);
		
		String url = "/Iva/MostrarPrecio.jsp";
		getServletContext().getRequestDispatcher(url).forward(request, response);
		
	}

}
