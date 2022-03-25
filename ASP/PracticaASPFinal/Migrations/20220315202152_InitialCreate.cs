using System;
using Microsoft.EntityFrameworkCore.Migrations;

#nullable disable

namespace PracticaASPFinal.Migrations
{
    public partial class InitialCreate : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.CreateTable(
                name: "Comics",
                columns: table => new
                {
                    Id = table.Column<int>(type: "int", nullable: false)
                        .Annotation("SqlServer:Identity", "1, 1"),
                    Title = table.Column<string>(type: "nvarchar(30)", maxLength: 30, nullable: false),
                    Autor = table.Column<string>(type: "nvarchar(30)", maxLength: 30, nullable: false),
                    Editorial = table.Column<string>(type: "nvarchar(30)", maxLength: 30, nullable: false),
                    Fecha_publicacion = table.Column<DateTime>(type: "datetime2", nullable: false),
                    Paginas = table.Column<int>(type: "int", nullable: true),
                    Sinopsis = table.Column<string>(type: "nvarchar(200)", maxLength: 200, nullable: true)
                },
                constraints: table =>
                {
                    table.PrimaryKey("PK_Comics", x => x.Id);
                });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropTable(
                name: "Comics");
        }
    }
}
