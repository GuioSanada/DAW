namespace ExamenASP2.Util
{
    public abstract class CantidadDias
    {
        public static double CalculaDias(DateTime d)
        {
            double totalDias = 0;
            DateTime hoy = DateTime.Now;

            TimeSpan resultado = hoy - d;

            totalDias = Math.Floor(resultado.TotalDays);

            return totalDias;
        }
    }
}
