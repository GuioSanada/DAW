using Microsoft.AspNetCore.Mvc;
using SimulacroASP.util;

namespace SimulacroASP.Controllers
{
    public class ComicsController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }

        public IActionResult PrecioComic()
        {
 
            return View(); 
        }
        public IActionResult mostrarFuncion()
        {
            if (HttpMethods.IsPost(Request.Method))
            {
                int pag = int.Parse(Request.Form["paginas"]);
                string color = Request.Form["color"];

                ViewData["precio"] = PrecioComics.CalcularPrecio(pag, color);

            }

            
            return View("MostrarPrecioComic");
        }
    }
}
