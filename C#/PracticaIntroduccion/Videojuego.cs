using System;
using System.Collections.Generic;
using System.Diagnostics.CodeAnalysis;
using System.Text;

namespace PracticaIntroduccion
{
    internal class Videojuego : IComparable<Videojuego>, IEquatable<Videojuego>
    {
        public String Name { get; set; }
        public Double Price { get; set; }
        public Platform PlatformString { get; set; }
        public Pegi PegiString { get; set; }

        public enum Platform 
        {
            Switch,
            Xbox,
            PS5
        }
        public enum Pegi
        {
            PEGI3,
            PEGI7,
            PEGI13,
            PEGI18
        }

        public Videojuego (String name, Double price, Platform platform, Pegi pegi)
        {
            Name = name;
            Price = price;
            PlatformString = platform;
            PegiString = pegi;
        }
        public override string ToString()
        {
            return "Name: " + Name + "\nPrecio: " + Price + "\nPlataforma: " + PlatformString + "\nPegi: " + PegiString;
        }

        public int CompareTo([AllowNull] Videojuego other)
        {
            if (other == null) return 1;
            else return this.Name.CompareTo(other.Name);
        }

        public bool Equals([AllowNull] Videojuego other)
        {
            if (other == null) return false;
            return this.Name.Equals(other.Name);
        }
    }
}
