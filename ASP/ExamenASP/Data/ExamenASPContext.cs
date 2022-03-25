#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using ExamenASP.Models;

namespace ExamenASP.Data
{
    public class ExamenASPContext : DbContext
    {
        public ExamenASPContext (DbContextOptions<ExamenASPContext> options)
            : base(options)
        {
        }

        public DbSet<ExamenASP.Models.Pelicula> Pelicula { get; set; }
    }
}
