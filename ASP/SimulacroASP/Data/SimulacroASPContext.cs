#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using SimulacroASP.Models;

namespace SimulacroASP.Data
{
    public class SimulacroASPContext : DbContext
    {
        public SimulacroASPContext (DbContextOptions<SimulacroASPContext> options)
            : base(options)
        {
        }

        public DbSet<SimulacroASP.Models.Manga> Manga { get; set; }
    }
}
