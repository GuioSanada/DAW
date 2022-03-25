namespace ExamenASP.Util
{
    public abstract class PrecioEntrada
    {
        public static float CalcularPrecio(int minutes, string uhd, string threed)
        {
            float precio = 0;
            if(minutes < 100)
            {
                precio = 6;
            }
            else if(minutes >=100 && minutes <= 120)
            {
                precio = 7;
            }
            else
            {
                precio = 8;
            }

            if(uhd == "uhd")
            {
                precio += (precio * 20 / 100);
            }

            if(threed == "3d")
            {
                precio += 1;

            }

            return precio;
        }
    }
}
