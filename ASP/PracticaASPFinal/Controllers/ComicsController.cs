#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using PracticaASPFinal.Data;
using PracticaASPFinal.Models;

namespace PracticaASPFinal.Controllers
{
    public class ComicsController : Controller
    {
        private readonly PracticaASPFinalContext _context;

        public ComicsController(PracticaASPFinalContext context)
        {
            _context = context;
        }

        // GET: Comics
        public async Task<IActionResult> Index(string SearchString, string SearchField, string campToSort, string typeOfSort)
        {
            var comics = from m in _context.Comics select m;
            if(!String.IsNullOrEmpty(SearchString) && !String.IsNullOrEmpty(SearchField) && !String.IsNullOrEmpty(campToSort) && !String.IsNullOrEmpty(typeOfSort))
            {
                if(SearchField == "titulo")
                {
                    comics = comics.Where(c => c.Title!.Contains(SearchString));
                    
                }
                if(SearchField == "autor")
                {
                    comics = comics.Where(c=>c.Autor!.Contains(SearchString));

                }
                if(SearchField == "editorial")
                {
                    comics = comics.Where(c => c.Editorial!.Contains(SearchString));
                }

                if (typeOfSort == "asc")
                {
                    if (campToSort == "titulo")
                    {
                        comics = comics.OrderBy(c => c.Title);
                    }
                    if (campToSort == "fecha")
                    {
                        comics = comics.OrderBy(c => c.Fecha_publicacion);
                    }
                    if (campToSort == "paginas")
                    {
                        comics = comics.OrderBy(c => c.Paginas);
                    }
                }
                else
                {
                    if (campToSort == "titulo")
                    {
                        comics = comics.OrderByDescending(c => c.Title);
                    }
                    if (campToSort == "fecha")
                    {
                        comics = comics.OrderByDescending(c => c.Fecha_publicacion);
                    }
                    if (campToSort == "paginas")
                    {
                        comics = comics.OrderByDescending(c => c.Paginas);
                    }
                }
            }


            return View(await comics.ToListAsync());

        }

        // GET: Comics/Details/5
        public async Task<IActionResult> Details(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var comics = await _context.Comics
                .FirstOrDefaultAsync(m => m.Id == id);
            if (comics == null)
            {
                return NotFound();
            }

            return View(comics);
        }

        // GET: Comics/Create
        public IActionResult Create()
        {
            return View();
        }

        // POST: Comics/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create([Bind("Id,Title,Autor,Editorial,Fecha_publicacion,Paginas,Sinopsis")] Comics comics)
        {
            if (ModelState.IsValid)
            {
                _context.Add(comics);
                await _context.SaveChangesAsync();
                return RedirectToAction(nameof(Index));
            }
            return View(comics);
        }

        // GET: Comics/Edit/5
        public async Task<IActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var comics = await _context.Comics.FindAsync(id);
            if (comics == null)
            {
                return NotFound();
            }
            return View(comics);
        }

        // POST: Comics/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edit(int id, [Bind("Id,Title,Autor,Editorial,Fecha_publicacion,Paginas,Sinopsis")] Comics comics)
        {
            if (id != comics.Id)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(comics);
                    await _context.SaveChangesAsync();
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!ComicsExists(comics.Id))
                    {
                        return NotFound();
                    }
                    else
                    {
                        throw;
                    }
                }
                return RedirectToAction(nameof(Index));
            }
            return View(comics);
        }

        // GET: Comics/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var comics = await _context.Comics
                .FirstOrDefaultAsync(m => m.Id == id);
            if (comics == null)
            {
                return NotFound();
            }

            return View(comics);
        }

        // POST: Comics/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> DeleteConfirmed(int id)
        {
            var comics = await _context.Comics.FindAsync(id);
            _context.Comics.Remove(comics);
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }

        private bool ComicsExists(int id)
        {
            return _context.Comics.Any(e => e.Id == id);
        }
    }
}
