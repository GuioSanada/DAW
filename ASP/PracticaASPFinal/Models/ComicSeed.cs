using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.DependencyInjection;
using PracticaASPFinal.Data;
using System;
using System.Linq;

namespace PracticaASPFinal.Models
{
    public static class ComicSeed
    {
        public static void Initialize(IServiceProvider serviceProvider)
        {
            using (var context = new PracticaASPFinalContext(
                serviceProvider.GetRequiredService<
                    DbContextOptions<PracticaASPFinalContext>>()))
            {
                // Look for any movies.
                if (context.Comics.Any())
                {
                    return;   // DB has been seeded
                }

                context.Comics.AddRange(
                    new Comics
                    {
                        Title = "Shingeki no Kyojin",
                        Autor = "Hajime Isayama",
                        Editorial = "Kodansha",
                        Fecha_publicacion = DateTime.Parse("2010-2-12"),
                        Paginas = 50,
                        Sinopsis = "Sasageyooooo sasaaaageyoooo"
                    },

                    new Comics
                    {
                        Title = "SKimetsu no Yaiba",
                        Autor = "Koyoharu Gotouge",
                        Editorial = "Shueisha",
                        Fecha_publicacion = DateTime.Parse("2020-2-12"),
                        Paginas = 50,
                        Sinopsis = "Concentracion total: Segunda Postura Rueda de agua"
                    },

                    new Comics
                    {
                        Title = "Ousama Rankin",
                        Autor = "Sosuke Toka",
                        Editorial = "Echoes enterbrain",
                        Fecha_publicacion = DateTime.Parse("2017-2-12"),
                        Paginas = 50,
                        Sinopsis = "AUauau aUAUAuauauauAUUA"
                    },

                    new Comics
                    {
                        Title = "My Hero academy",
                        Autor = "Kohei Horikoshi",
                        Editorial = "Planeta Comic",
                        Fecha_publicacion = DateTime.Parse("2010-2-12"),
                        Paginas = 50,
                        Sinopsis = "PLUUUUUSSSS UUUUUULTRAAAAAAAAA"
                    }
                );
                context.SaveChanges();
            }
        }
    }
}