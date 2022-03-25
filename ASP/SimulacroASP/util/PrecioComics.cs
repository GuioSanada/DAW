namespace SimulacroASP.util
{
    public abstract class PrecioComics
    {
        public static float CalcularPrecio(int pag, string typeOfColor)
        {
            float precio = 0;
            if(pag > 0 && pag < 150){
                precio = 8;
            }else if(pag >=150 && pag <= 200)
            {
                precio = 9;
            }
            else
            {
                precio = 10;
            }

            if(typeOfColor == "color")
            {
                precio += (precio * 25 / 100);
            }
            return precio;
        }
    }
}
