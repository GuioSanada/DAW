#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using PracticaASP.Models;

namespace PracticaASP.Data
{
    public class PracticaASPContext : DbContext
    {
        public PracticaASPContext (DbContextOptions<PracticaASPContext> options)
            : base(options)
        {
        }

        public DbSet<PracticaASP.Models.Comics> Comics { get; set; }
    }
}
