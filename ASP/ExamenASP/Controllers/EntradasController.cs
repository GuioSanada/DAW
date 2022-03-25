using Microsoft.AspNetCore.Mvc;
using static ExamenASP.Util.PrecioEntrada;

namespace ExamenASP.Controllers
{
    public class EntradasController : Controller
    {
        public IActionResult Index()
        {

            return View();
        }
        public IActionResult PrecioEntrada()
        {

            return View();
        }
        public IActionResult CalcularPrecioPelicula()
        {
            if (HttpMethods.IsPost(Request.Method))
            {
                /*int pag = int.Parse(Request.Form["paginas"]);
                string color = Request.Form["color"];

                ViewData["precio"] = PrecioComics.CalcularPrecio(pag, color);*/

                int duracion = int.Parse(Request.Form["duracion"]);
                string uhd = Request.Form["uhd"];
                string threed = Request.Form["3d"];

                ViewData["precio"] = Util.PrecioEntrada.CalcularPrecio(duracion, uhd, threed);


            }


            return View("MostrarPrecioEntrada");
        }
    }
}
