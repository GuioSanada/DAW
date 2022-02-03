using System;
using System.Collections.Generic;
using System.Linq;

namespace PracticaIntroduccion
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // APARTADO 1 CREAMOS 3 VIDEOJUEGOS
            Videojuego pokemon = new Videojuego("Pokemon", 59.99, Videojuego.Platform.Switch, Videojuego.Pegi.PEGI3);
            Videojuego ff7 = new Videojuego("FF7", 69.99, Videojuego.Platform.PS5, Videojuego.Pegi.PEGI13);
            Videojuego eldenRing = new Videojuego("Elden Ring", 109.99, Videojuego.Platform.Xbox, Videojuego.Pegi.PEGI18);

            // CREAMOS LISTA
            List<Videojuego> videojuegos = new List<Videojuego>();
            
            // AÑADIMOS VIDEOJUEGOS A LA LISTA
            videojuegos.Add(ff7);
            videojuegos.Add(pokemon);
            videojuegos.Add(eldenRing);

            //IMPRIMIMOS LISTA
            foreach(Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

            // BORRAMOS UN VIDEOJUEGO
            Console.WriteLine("Borramos FF7\n");
            videojuegos.Remove(ff7);
            // COMPROBAMOS QUE HEMOS BORRADO
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

            // AÑADIMOS UN JUEGO A PRIMERA POSICION
            Console.WriteLine("\n Añadimos FF7 en primera posicion");
            videojuegos.Insert(0, ff7);

            // LO COMPROBAMOS
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

            // BORRAMOS ULTIMO JUEGO DE LA LISTA
            Console.WriteLine("\n Borramos el ultimo videojuego");
            videojuegos.RemoveAt(videojuegos.Count()-1);
            //COMPROBAMOS QUE HEMOS BORRADO EL ULTIMO
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }
            // CREAMOS UN VIDEOJUEGO IGUAL A OTRO
            Videojuego ff72 = new Videojuego("FF7", 69.99, Videojuego.Platform.PS5, Videojuego.Pegi.PEGI13);
            // COMPROBAMOS QUE LOS OBJETOS SON IGUALES POR NOMBRE
            Console.WriteLine("\n Comprobamos si los videojuegos ff7 y ff72 son iguales con EQUALS:\n");
            if (ff7.Equals(ff72))
            {
                Console.WriteLine("\n Son iguales\n");
            }
            else
            {
                Console.WriteLine("\nSon distintos\n");
            }

            // ORDENAMOS LA LISTA POR SU NOMBRE (INVERSO) Y LO MOSTRAMOS

            videojuegos.Reverse();
            Console.WriteLine("\n Mostramos la lista ordenada por nombre DESC");
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

            // ORDENAR LA LISTA POR PRECIO

            videojuegos = videojuegos.OrderBy(v => v.Price).ToList();
            Console.WriteLine("\nMostramos la lista ordenada por precio");
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

            //Mostramos la lista con los videojuegos con precio mayor a 30
            videojuegos = videojuegos.Where(v => v.Price > 30).ToList();
            Console.WriteLine("\nMostramos la lista solo con los videojuegos con precio mayor de 30");
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

            videojuegos = videojuegos.OrderBy(v => v.Name).ToList();
            Console.WriteLine("\nMostramos la lista ordenada por Nombre");
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }
            // mostramos solo los videojuegos entre 10 y 40
            videojuegos = videojuegos.Where(v => v.Price >= 10).ToList();
            videojuegos = videojuegos.Where(v => v.Price <= 40).ToList();
            Console.WriteLine("\nMostramos la lista ordenada por precios entre 10 y 40");
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }
            // mostramos los juegos con nombre pokemon da igual si esta en mayus o minus
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

            videojuegos.Add(ff7);
            videojuegos.Add(pokemon);
            videojuegos.Add(eldenRing);
            videojuegos = videojuegos.Where(v => v.Name.ToLower() == "Pokemon".ToLower()).ToList();
            Console.WriteLine("\nMostramos si hay un juego con el nombre pokemon. da igual min y may");
            foreach (Videojuego videojuego in videojuegos)
            {
                Console.WriteLine(videojuego.ToString());
                Console.WriteLine();
            }

        }
    }
}
