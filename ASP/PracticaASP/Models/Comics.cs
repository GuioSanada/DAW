using System.ComponentModel.DataAnnotations;

namespace PracticaASP.Models
{
    public class Comics
    {
        [Required(ErrorMessage = "Este campo es obligatorio")]
        public int Id { get; set; }
       

        [Required(ErrorMessage="Este campo es obligatorio")]
        [StringLength(30, ErrorMessage="Maximo de 30 caracteres.")]
        [RegularExpression(@"^[a-zA-Z0-9][a-zA-Z0-9\s*$", ErrorMessage ="El texto introducido solo puede contener letras, numeros y/o espacios en blanco.")]
        public string Title { get; set; }
        
        
        [Required(ErrorMessage = "Este campo es obligatorio")]
        [StringLength(30, ErrorMessage = "Maximo de 30 caracteres.")]
        [RegularExpression(@"^[a-zA-Z0-9][a-zA-Z0-9\s*$", ErrorMessage = "El texto introducido solo puede contener letras, numeros y/o espacios en blanco.")]
        public string Autor { get; set; }
        
        
        [Required(ErrorMessage = "Este campo es obligatorio")]
        [StringLength(30, ErrorMessage = "Maximo de 30 caracteres.")]
        [RegularExpression(@"^[a-zA-Z0-9][a-zA-Z0-9\s*$", ErrorMessage = "El texto introducido solo puede contener letras, numeros y/o espacios en blanco.")]
        public string Editorial { get; set; }
        
        
        [Required(ErrorMessage = "Este campo es obligatorio")]
        [DataType(DataType.Date)]
        [Display(Name = "Fecha de Publicacion")]
        public DateTime Fecha_publicacion { get; set; }
        

        [Range(1,5000, ErrorMessage = "Valor entre 1 y 5000. Ingrese un numero entero valido")]       

        public int? Paginas { get; set; }
        
        [StringLength(200, ErrorMessage = "El campo introducido no debe exceder los 200 caracteres.")]
        public string? Sinopsis { get; set; }


    }
}
