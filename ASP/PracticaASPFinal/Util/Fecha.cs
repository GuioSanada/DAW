namespace PracticaASPFinal.Util
{
    public abstract class Fecha

    {
        public static string TimeTranscurrated(DateTime d)
        {

            long TimePublish = d.Ticks;
            long DayDate = new DateTime(DateTime.Now.Year, DateTime.Now.Month, DateTime.Now.Day).Ticks;

            long result = Math.Abs(TimePublish - DayDate);
            DateTime dateResult = new DateTime(result);

            int year = dateResult.Year - 1;
            int month = dateResult.Month - 1;
            int day = dateResult.Day - 1;

            if (DayDate > TimePublish)
            {
                return $"Publicado hace {year} años, {month} meses y {day} días";
            }
            else if (result == TimePublish)
            {
                return "Se estrena hoy";
            }

            return $"Se publicará en {year} años, {month} meses y {day} días";
        }
    }
}


