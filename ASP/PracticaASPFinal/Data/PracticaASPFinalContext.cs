#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using PracticaASPFinal.Models;

namespace PracticaASPFinal.Data
{
    public class PracticaASPFinalContext : DbContext
    {
        public PracticaASPFinalContext (DbContextOptions<PracticaASPFinalContext> options)
            : base(options)
        {
        }

        public DbSet<PracticaASPFinal.Models.Comics> Comics { get; set; }
    }
}
