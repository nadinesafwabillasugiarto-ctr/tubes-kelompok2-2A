@extends('layouts.app')

@section('title', 'Catat Setoran Sampah - Bank Sampah Digital')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
    <h1 class="text-xl font-bold text-slate-800">Catat Setoran Sampah</h1>
    <p class="text-sm text-slate-600 mt-1">Poin akan dihitung otomatis dari berat setoran dikali nilai poin per kg kategori.</p>

    <form action="{{ route('deposits.store') }}" method="POST" class="mt-5 space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Nasabah</label>
            <select name="user_id" required class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm bg-white focus:border-emerald-600 focus:outline-none">
                <option value="">-- Pilih Nasabah --</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>
                        {{ $user->name }} (Saldo: {{ number_format($user->points_balance) }} poin)
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Kategori Sampah</label>
            <select name="waste_category_id" required class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm bg-white focus:border-emerald-600 focus:outline-none">
                <option value="">-- Pilih Kategori Sampah --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('waste_category_id') == $category->id)>
                        {{ $category->name }} ({{ number_format($category->points_per_kg) }} poin/kg)
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Berat Setoran (Kg)</label>
            <input type="number" step="0.01" min="0.1" name="weight_kg" value="{{ old('weight_kg') }}" required
                   placeholder="Contoh: 2.50"
                   class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Catatan (Opsional)</label>
            <textarea name="notes" rows="2" placeholder="Contoh: Sampah plastik sudah dicuci bersih"
                      class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-emerald-600 focus:outline-none">{{ old('notes') }}</textarea>
        </div>

        <div class="flex items-center justify-end gap-2 pt-2">
            <a href="{{ route('deposits.index') }}"
               class="px-4 py-2 text-sm text-slate-600 hover:bg-slate-100 rounded-lg">Batal</a>
            <button type="submit"
                    class="bg-emerald-700 hover:bg-emerald-800 text-white text-sm font-medium px-4 py-2 rounded-lg">
                Simpan Setoran
            </button>
        </div>
    </form>
</div>
@endsection