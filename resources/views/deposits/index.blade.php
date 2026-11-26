@extends('layouts.app')

@section('title', 'Setoran Sampah - Bank Sampah Digital')

@section('content')
<div class="space-y-6">
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-slate-800">Riwayat Setoran Sampah</h1>
            <p class="text-sm text-slate-600 mt-1">Pencatatan berat setoran sampah terpilah dan akumulasi poin nasabah.</p>
        </div>
        <a href="{{ route('deposits.create') }}"
           class="bg-emerald-700 hover:bg-emerald-800 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm">
            + Catat Setoran
        </a>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-100 border-b border-slate-200 text-xs uppercase text-slate-600">
                <tr>
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">Nasabah</th>
                    <th class="py-3 px-4">Kategori Sampah</th>
                    <th class="py-3 px-4">Berat (Kg)</th>
                    <th class="py-3 px-4">Poin Diperoleh</th>
                    <th class="py-3 px-4">Catatan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 text-sm">
                @forelse ($deposits as $index => $deposit)
                    <tr class="hover:bg-slate-50">
                        <td class="py-3 px-4 text-slate-500">{{ $index + 1 }}</td>
                        <td class="py-3 px-4">
                            <div class="font-semibold text-slate-800">{{ $deposit->user->name ?? '-' }}</div>
                            <div class="text-xs text-slate-500">Saldo saat ini: {{ number_format($deposit->user->points_balance ?? 0) }} poin</div>
                        </td>
                        <td class="py-3 px-4 text-slate-700">{{ $deposit->wasteCategory->name ?? '-' }}</td>
                        <td class="py-3 px-4 font-medium text-slate-800">{{ number_format($deposit->weight_kg, 2) }} kg</td>
                        <td class="py-3 px-4">
                            <span class="inline-block bg-emerald-50 text-emerald-700 border border-emerald-200 font-semibold px-2.5 py-0.5 rounded-full text-xs">
                                +{{ number_format($deposit->points_earned) }} poin
                            </span>
                        </td>
                        <td class="py-3 px-4 text-slate-600">{{ $deposit->notes ?? '-' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-8 px-4 text-center text-slate-500">
                            Belum ada transaksi setoran sampah.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection