package com.prueba4.Util;

public abstract class Impuestos {
	public static double getPrecioTotal(double precio, int iva) {
		double precioFinal = precio + (precio*(double)iva/100);
		
		return precioFinal;
		
	}
}
