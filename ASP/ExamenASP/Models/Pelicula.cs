using System.ComponentModel.DataAnnotations;

namespace ExamenASP.Models
{
    public class Pelicula
    {
        [Required]
        public int Id { get; set; }


        [Required(ErrorMessage = "Este campo es obligatorio")]
        [StringLength(30, ErrorMessage = "Maximo de 30 caracteres.")]
        [RegularExpression(@"^[a-zA-Z0-9][a-zA-Z0-9\s]*$", ErrorMessage = "El texto introducido solo puede contener letras, numeros y/o espacios en blanco.")]
        public string Titulo { get; set; }

        [Required(ErrorMessage = "El campo debe ser obligatorio")]
        [Range(1, 500, ErrorMessage = "El campo introducido debe estar comprendido entre 1 y 500")]
        public int Duracion { get; set; }

        [Required(ErrorMessage = "Este campo es obligatorio")]
        [DataType(DataType.Date)]
        [Display(Name = "Fecha de Publicacion")]
        public DateTime Fecha_estreno { get; set; }

    }
}
