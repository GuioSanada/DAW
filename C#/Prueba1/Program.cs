using System;
using System.Collections.Generic;
using System.Linq;

namespace Prueba1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            /*int[,] MiArray = new int[,] { { 1, 2, 3 }, { 1, 2, 3 }, };
            for (int i = 0; i < MiArray.GetLength(0); i++)
            {
                for (int j = 0; j < MiArray.GetLength(1); j++)
                {
                    Console.WriteLine(MiArray[i, j]);
                }
            }*/
            Character pikachu = new Character("Pikachu", 100, 10, 8);
            Character bulbasaur = new Character("Bulbasaur", 120, 18, 3);
            Character charmander = new Character("Charmander", 150, 20, 6);
            Character squirtle = new Character("Squirtle", 115, 15, 8);

            List<Character> pokemons = new List<Character>();

            pokemons.Add(pikachu);
            pokemons.Add(bulbasaur);
            pokemons.Add(charmander);
            pokemons.Add(squirtle);


            Console.WriteLine("Lista de pokemons\n");
            foreach(Character pokemon in pokemons)
            {
                Console.WriteLine(pokemon.ToString());
            }
            Console.WriteLine("\n");

            Console.WriteLine("Lista de pokemons ordenada Alf\n");
            pokemons.Sort();

            foreach (Character pokemon in pokemons)
            {
                Console.WriteLine(pokemon.ToString());
            }
            Console.WriteLine("\n");

            Console.WriteLine("Lista de pokemons ordenada Desc\n");
            pokemons.Reverse();
            foreach (Character pokemon in pokemons)
            {
                Console.WriteLine(pokemon.ToString());
            }
            Console.WriteLine("\n");

            Console.WriteLine("Comparo si dos objetos son iguales.\n");
            Console.WriteLine(pikachu.Equals(pikachu));
            Console.WriteLine(pikachu.Equals(charmander));

            Console.WriteLine("\n\nUsando LINQ\n");
            Console.WriteLine("Ordenando por Atk.\n");
            pokemons = pokemons.OrderBy(c => c.Atk).ToList();
            foreach (Character pokemon in pokemons)
            {
                Console.WriteLine(pokemon.ToString());
            }
            Console.WriteLine("\n");
            Console.WriteLine("Muestro solo personajes con Atk >= 15\n");
            pokemons = pokemons.Where(c => c.Atk >= 15).ToList();
            foreach (Character pokemon in pokemons)
            {
                Console.WriteLine(pokemon.ToString());
            }

        }
    }
}
