#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using SimulacroASP.Data;
using SimulacroASP.Models;

namespace SimulacroASP.Controllers
{
    public class MangasController : Controller
    {
        private readonly SimulacroASPContext _context;

        public MangasController(SimulacroASPContext context)
        {
            _context = context;
        }

        // GET: Mangas
        public async Task<IActionResult> Index(string searchString)
        {
            var mangas = from m in _context.Manga select m;
            if (!String.IsNullOrEmpty(searchString))
            {
                mangas = mangas.Where(m => m.Name!.Contains(searchString));
            }

            return View(await mangas.ToListAsync());
        }

        // GET: Mangas/Details/5
        public async Task<IActionResult> Details(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var manga = await _context.Manga
                .FirstOrDefaultAsync(m => m.Id == id);
            if (manga == null)
            {
                return NotFound();
            }

            return View(manga);
        }

        // GET: Mangas/Create
        public IActionResult Create()
        {
            return View();
        }

        // POST: Mangas/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create([Bind("Id,Name,Pages,Color")] Manga manga)
        {
            if (ModelState.IsValid)
            {
                _context.Add(manga);
                await _context.SaveChangesAsync();
                return RedirectToAction(nameof(Index));
            }
            return View(manga);
        }

        // GET: Mangas/Edit/5
        public async Task<IActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var manga = await _context.Manga.FindAsync(id);
            if (manga == null)
            {
                return NotFound();
            }
            return View(manga);
        }

        // POST: Mangas/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edit(int id, [Bind("Id,Name,Pages,Color")] Manga manga)
        {
            if (id != manga.Id)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(manga);
                    await _context.SaveChangesAsync();
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!MangaExists(manga.Id))
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
            return View(manga);
        }

        // GET: Mangas/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var manga = await _context.Manga
                .FirstOrDefaultAsync(m => m.Id == id);
            if (manga == null)
            {
                return NotFound();
            }

            return View(manga);
        }

        // POST: Mangas/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> DeleteConfirmed(int id)
        {
            var manga = await _context.Manga.FindAsync(id);
            _context.Manga.Remove(manga);
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }

        private bool MangaExists(int id)
        {
            return _context.Manga.Any(e => e.Id == id);
        }
    }
}
