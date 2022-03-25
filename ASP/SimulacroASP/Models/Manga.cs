using System.ComponentModel.DataAnnotations;

namespace SimulacroASP.Models
{
    public class Manga
    {
        [Required(ErrorMessage = "El campo debe ser obligatorio")]
        public int Id { get; set; }
        
        [Required (ErrorMessage="El campo debe ser obligatorio")]
        [StringLength (30, ErrorMessage = "Maximo 30 caracteres")]
        [RegularExpression(@"^[a-zA-Z0-9\s]+$", ErrorMessage = "El campo solo admite letras, numeros y espacios en blanco.")]
        public string Name { get; set; }

        [Required(ErrorMessage = "El campo debe ser obligatorio")]
        [Range(1,1000, ErrorMessage = "El campo introducido debe estar comprendido entre 1 y 1000")]
        public int Pages { get; set; }

        [Required(ErrorMessage = "El campo debe ser obligatorio")]
        [StringLength(20, ErrorMessage = "Maximo 20 caracteres")]
        [RegularExpression(@"^[a-zA-Z0-9\s]+$", ErrorMessage = "El campo solo admite letras, numeros y espacios en blanco.")]
        public string Color { get; set; }
    }
}
