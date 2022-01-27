using System;
using System.Collections.Generic;
using System.Diagnostics.CodeAnalysis;
using System.Text;


namespace Prueba1
{
    internal class Character : IComparable<Character>, IEquatable<Character>
    {
        public String Name { get; set; }
        public int Health { get; set; }
        public int Atk { get; set; }
        public int Def { get; set; }

        public Character(string name, int health, int atk, int def)
        {
            Name = name;
            Health = health;
            Atk = atk;
            Def = def;
        }
        public Character()
        {

        }
        public override string ToString()
        {
            return "Name: " + Name + "\nHealth: " + Health + "\nAtk: " + Atk + "\nDef: " + Def;
        }

        public int CompareTo([AllowNull] Character other)
        {
            if (other == null)
                return 1;
            else
                return Name.CompareTo(other.Name);
        }

        public bool Equals([AllowNull] Character other)
        {
            if (other == null) return false;
            return this.Name.Equals(other.Name);
        }
    }
}
