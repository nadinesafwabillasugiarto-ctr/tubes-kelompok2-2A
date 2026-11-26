@extends('layouts.app')

@section('title', 'Dashboard - Bank Sampah Digital')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
        <span class="inline-block text-xs font-semibold uppercase tracking-wider text-emerald-700 bg-emerald-50 border border-emerald-200 px-2.5 py-1 rounded-full">
            SDG 12 • Konsumsi &amp; Produksi Bertanggung Jawab
        </span>
        <h1 class="text-2xl font-bold text-slate-800 mt-3">Sistem Bank Sampah Digital</h1>
        <p class="text-slate-600 mt-1 text-sm max-w-2xl">
            Kelola setoran sampah anorganik terpilah, pantau perolehan poin secara transparan, dan tukarkan poin dengan kebutuhan pokok sehari-hari.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm flex flex-col justify-between">
            <div>
                <div class="text-lg font-bold text-slate-800">Kategori Sampah</div>
                <p class="text-sm text-slate-600 mt-1">
                    Daftar jenis sampah anorganik beserta nilai konversi poin per kilogram.
                </p>
            </div>
            <a href="{{ route('waste-categories.index') }}" class="inline-block mt-4 text-sm font-medium text-emerald-700 hover:underline">
                Lihat Kategori Sampah &rarr;
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm flex flex-col justify-between">
            <div>
                <div class="text-lg font-bold text-slate-800">Setoran Sampah</div>
                <p class="text-sm text-slate-600 mt-1">
                    Pencatatan berat setoran sampah terpilah dan akumulasi saldo poin otomatis.
                </p>
            </div>
            <a href="{{ route('deposits.index') }}" class="inline-block mt-4 text-sm font-medium text-emerald-700 hover:underline">
                Catat Setoran Sampah &rarr;
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm flex flex-col justify-between">
            <div>
                <div class="text-lg font-bold text-slate-800">Penukaran Poin</div>
                <p class="text-sm text-slate-600 mt-1">
                    Penukaran saldo poin dengan katalog kebutuhan pokok dengan pembaruan stok langsung.
                </p>
            </div>
            <a href="{{ route('redemptions.index') }}" class="inline-block mt-4 text-sm font-medium text-emerald-700 hover:underline">
                Tukar Poin &rarr;
            </a>
        </div>
    </div>
</div>
@endsection