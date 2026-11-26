<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bank Sampah Digital - SDG 12')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    <nav class="bg-emerald-700 text-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-wrap items-center justify-between gap-4">
            <a href="{{ route('dashboard') }}" class="font-bold text-lg tracking-wide">
                Bank Sampah Digital <span class="text-emerald-200 text-sm font-normal">(SDG 12)</span>
            </a>

            <div class="flex flex-wrap items-center gap-2 text-sm">
                <a href="{{ route('dashboard') }}"
                   class="px-3 py-1.5 rounded {{ request()->routeIs('dashboard') ? 'bg-emerald-900 font-semibold' : 'hover:bg-emerald-600' }}">
                    Dashboard
                </a>
                <a href="{{ route('waste-categories.index') }}"
                   class="px-3 py-1.5 rounded {{ request()->routeIs('waste-categories.*') ? 'bg-emerald-900 font-semibold' : 'hover:bg-emerald-600' }}">
                    Kategori Sampah
                </a>
                <a href="{{ route('deposits.index') }}"
                   class="px-3 py-1.5 rounded {{ request()->routeIs('deposits.*') ? 'bg-emerald-900 font-semibold' : 'hover:bg-emerald-600' }}">
                    Setoran Sampah
                </a>
                <a href="{{ route('redemptions.index') }}"
                   class="px-3 py-1.5 rounded {{ request()->routeIs('redemptions.*') ? 'bg-emerald-900 font-semibold' : 'hover:bg-emerald-600' }}">
                    Penukaran Poin
                </a>
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-6xl w-full mx-auto px-4 py-6">
        @if (session('success'))
            <div class="mb-4 rounded-lg bg-emerald-100 border border-emerald-300 text-emerald-800 px-4 py-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-rose-100 border border-rose-300 text-rose-800 px-4 py-3 text-sm">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-white border-t border-slate-200 py-4 text-center text-xs text-slate-500">
        Proyek Akhir Pemrograman Web Full Stack — SDG 12: Responsible Consumption &amp; Production
    </footer>
</body>
</html>