@extends('layouts.app')

@section('title', 'Dashboard - Bank Sampah Digital')

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-xl border border-slate-200 p-6 shadow-sm">
        <h1 class="text-2xl font-bold text-slate-800">Sistem Bank Sampah Digital (SDG 12)</h1>
        <p class="text-slate-600 mt-1 text-sm">
            Platform pengelolaan setoran sampah anorganik terpilah, perhitungan poin otomatis, dan penukaran kebutuhan pokok.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm">
            <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold">Modul 1 • Nadine</div>
            <div class="text-lg font-bold text-slate-800 mt-1">Kategori Sampah</div>
            <p class="text-sm text-slate-600 mt-1">Kelola jenis sampah anorganik &amp; nilai poin per kg.</p>
            <a href="{{ route('waste-categories.index') }}" class="inline-block mt-3 text-sm font-medium text-emerald-700 hover:underline">
                Buka Kategori Sampah &rarr;
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm">
            <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold">Modul 2 • Inez</div>
            <div class="text-lg font-bold text-slate-800 mt-1">Setoran Sampah</div>
            <p class="text-sm text-slate-600 mt-1">Catat berat setoran &amp; akumulasi poin nasabah otomatis.</p>
            <a href="{{ route('deposits.index') }}" class="inline-block mt-3 text-sm font-medium text-emerald-700 hover:underline">
                Buka Setoran Sampah &rarr;
            </a>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm">
            <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold">Modul 3 • Titania</div>
            <div class="text-lg font-bold text-slate-800 mt-1">Penukaran Poin</div>
            <p class="text-sm text-slate-600 mt-1">Tukar poin dengan sembako, potong saldo &amp; stok otomatis.</p>
            <a href="{{ route('redemptions.index') }}" class="inline-block mt-3 text-sm font-medium text-emerald-700 hover:underline">
                Buka Penukaran Poin &rarr;
            </a>
        </div>
    </div>
</div>
@endsection