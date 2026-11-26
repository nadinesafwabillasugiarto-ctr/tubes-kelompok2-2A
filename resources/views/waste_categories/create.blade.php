@extends('layouts.app')

@section('title', 'Tambah Kategori Sampah - Bank Sampah Digital')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
    <h1 class="text-xl font-bold text-slate-800 mb-4">Tambah Kategori Sampah</h1>

    <form action="{{ route('waste-categories.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nama Kategori</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                   placeholder="Contoh: Botol Plastik PET"
                   class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-600">
        </div>

        <div>
            <label for="points_per_kg" class="block text-sm font-medium text-slate-700 mb-1">Poin per Kilogram (kg)</label>
            <input type="number" id="points_per_kg" name="points_per_kg" value="{{ old('points_per_kg') }}" min="1" required
                   placeholder="Contoh: 50"
                   class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-600">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-slate-700 mb-1">Deskripsi (Opsional)</label>
            <textarea id="description" name="description" rows="3"
                      placeholder="Keterangan kondisi sampah yang diterima..."
                      class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-600">{{ old('description') }}</textarea>
        </div>

        <div class="flex items-center justify-end gap-2 pt-2">
            <a href="{{ route('waste-categories.index') }}"
               class="px-4 py-2 rounded-lg border border-slate-300 text-sm text-slate-700 hover:bg-slate-50">
                Batal
            </a>
            <button type="submit"
                    class="px-4 py-2 rounded-lg bg-emerald-700 hover:bg-emerald-800 text-white text-sm font-medium">
                Simpan Kategori
            </button>
        </div>
    </form>
</div>
@endsection