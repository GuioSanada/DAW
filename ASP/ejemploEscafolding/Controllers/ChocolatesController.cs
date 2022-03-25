#nullable disable
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using ejemploEscafolding.Data;
using ejemploEscafolding.Models;

namespace ejemploEscafolding.Controllers
{
    public class ChocolatesController : Controller
    {
        private readonly ejemploEscafoldingContext _context;

        public ChocolatesController(ejemploEscafoldingContext context)
        {
            _context = context;
        }

        // GET: Chocolates
        public async Task<IActionResult> Index()
        {
            return View(await _context.Chocolate.ToListAsync());
        }

        // GET: Chocolates/Details/5
        public async Task<IActionResult> Details(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var chocolate = await _context.Chocolate
                .FirstOrDefaultAsync(m => m.Id == id);
            if (chocolate == null)
            {
                return NotFound();
            }

            return View(chocolate);
        }

        // GET: Chocolates/Create
        public IActionResult Create()
        {
            return View();
        }

        // POST: Chocolates/Create
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create([Bind("Id,Name,Price,Ingredientes,Marca")] Chocolate chocolate)
        {
            if (ModelState.IsValid)
            {
                _context.Add(chocolate);
                await _context.SaveChangesAsync();
                return RedirectToAction(nameof(Index));
            }
            return View(chocolate);
        }

        // GET: Chocolates/Edit/5
        public async Task<IActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var chocolate = await _context.Chocolate.FindAsync(id);
            if (chocolate == null)
            {
                return NotFound();
            }
            return View(chocolate);
        }

        // POST: Chocolates/Edit/5
        // To protect from overposting attacks, enable the specific properties you want to bind to.
        // For more details, see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edit(int id, [Bind("Id,Name,Price,Ingredientes,Marca")] Chocolate chocolate)
        {
            if (id != chocolate.Id)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(chocolate);
                    await _context.SaveChangesAsync();
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!ChocolateExists(chocolate.Id))
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
            return View(chocolate);
        }

        // GET: Chocolates/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var chocolate = await _context.Chocolate
                .FirstOrDefaultAsync(m => m.Id == id);
            if (chocolate == null)
            {
                return NotFound();
            }

            return View(chocolate);
        }

        // POST: Chocolates/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> DeleteConfirmed(int id)
        {
            var chocolate = await _context.Chocolate.FindAsync(id);
            _context.Chocolate.Remove(chocolate);
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }

        private bool ChocolateExists(int id)
        {
            return _context.Chocolate.Any(e => e.Id == id);
        }
    }
}
