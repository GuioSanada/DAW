#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using ejemploEscafolding.Models;

namespace ejemploEscafolding.Data
{
    public class ejemploEscafoldingContext : DbContext
    {
        public ejemploEscafoldingContext (DbContextOptions<ejemploEscafoldingContext> options)
            : base(options)
        {
        }

        public DbSet<ejemploEscafolding.Models.Chocolate> Chocolate { get; set; }
    }
}
