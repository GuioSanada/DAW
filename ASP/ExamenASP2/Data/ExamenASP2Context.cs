#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using ExamenASP2.Models;

namespace ExamenASP2.Data
{
    public class ExamenASP2Context : DbContext
    {
        public ExamenASP2Context (DbContextOptions<ExamenASP2Context> options)
            : base(options)
        {
        }

        public DbSet<ExamenASP2.Models.Pelicula> Pelicula { get; set; }
    }
}
