@extends('layouts.app')

@section('title', 'Kategori Sampah - Bank Sampah Digital')

@section('content')
<div class="space-y-4">
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold text-slate-800">Daftar Kategori Sampah</h1>
            <p class="text-sm text-slate-600">Kelola jenis sampah anorganik dan nilai poin per kilogram.</p>
        </div>
        <a href="{{ route('waste-categories.create') }}"
           class="bg-emerald-700 hover:bg-emerald-800 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm">
            + Tambah Kategori
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-100 text-slate-700 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">No</th>
                    <th class="px-4 py-3">Nama Kategori</th>
                    <th class="px-4 py-3">Deskripsi</th>
                    <th class="px-4 py-3">Poin / Kg</th>
                    <th class="px-4 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                @forelse ($categories as $category)
                    <tr class="hover:bg-slate-50">
                        <td class="px-4 py-3">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 font-semibold text-slate-800">{{ $category->name }}</td>
                        <td class="px-4 py-3 text-slate-600">{{ $category->description ?? '-' }}</td>
                        <td class="px-4 py-3">
                            <span class="inline-block bg-emerald-100 text-emerald-800 font-semibold px-2.5 py-0.5 rounded-full text-xs">
                                {{ number_format($category->points_per_kg) }} poin/kg
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('waste-categories.edit', $category) }}"
                               class="text-amber-600 hover:underline font-medium">Edit</a>
                            <form action="{{ route('waste-categories.destroy', $category) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Hapus kategori sampah ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-600 hover:underline font-medium">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-slate-500">
                            Belum ada data kategori sampah.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection