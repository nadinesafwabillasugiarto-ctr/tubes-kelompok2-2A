<?php

namespace App\Http\Controllers;

use App\Models\WasteCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WasteCategoryController extends Controller
{
    public function index(): View
    {
        $categories = WasteCategory::latest()->get();

        return view('waste_categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('waste_categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:waste_categories,name'],
            'description' => ['nullable', 'string', 'max:500'],
            'points_per_kg' => ['required', 'integer', 'min:1'],
        ]);

        WasteCategory::create($validated);

        return redirect()
            ->route('waste-categories.index')
            ->with('success', 'Kategori sampah berhasil ditambahkan.');
    }

    public function edit(WasteCategory $wasteCategory): View
    {
        return view('waste_categories.edit', compact('wasteCategory'));
    }

    public function update(Request $request, WasteCategory $wasteCategory): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:waste_categories,name,' . $wasteCategory->id],
            'description' => ['nullable', 'string', 'max:500'],
            'points_per_kg' => ['required', 'integer', 'min:1'],
        ]);

        $wasteCategory->update($validated);

        return redirect()
            ->route('waste-categories.index')
            ->with('success', 'Kategori sampah berhasil diperbarui.');
    }

    public function destroy(WasteCategory $wasteCategory): RedirectResponse
    {
        $wasteCategory->delete();

        return redirect()
            ->route('waste-categories.index')
            ->with('success', 'Kategori sampah berhasil dihapus.');
    }
}