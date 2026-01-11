<aside class="w-64 bg-white border-r border-gray-100 hidden md:flex flex-col fixed inset-y-0 z-10">
    <div class="h-20 flex items-center justify-center border-b border-gray-100">
        <h1 class="text-2xl font-bold text-indigo-600 tracking-wider">SIPAYROLL</h1>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">

        @php
            $activeDashboard = request()->routeIs('dashboard');
            $classDashboard = $activeDashboard
                ? 'bg-indigo-50 text-indigo-600'
                : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600';
        @endphp
        <a href="{{ route('dashboard') }}"
            class="flex items-center px-4 py-3 rounded-xl transition-colors font-medium {{ $classDashboard }}">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                </path>
            </svg>
            Dashboard
        </a>

        @php
            $activeMaster =
                request()->routeIs('data-master.*') ||
                request()->routeIs('users.*') ||
                request()->routeIs('karyawan.*') ||
                request()->routeIs('jabatan.*') ||
                request()->routeIs('kehadiran.*');
            $classMaster = $activeMaster
                ? 'bg-indigo-50 text-indigo-600'
                : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600';
        @endphp
        <a href="{{ route('data-master.index') }}"
            class="flex items-center px-4 py-3 rounded-xl transition-colors font-medium {{ $classMaster }}">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>
            Data Master
        </a>

        @php
            $activeGaji = request()->routeIs('gaji.*');
            $classGaji = $activeGaji
                ? 'bg-indigo-50 text-indigo-600'
                : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600';
        @endphp

        <a href="{{ route('gaji.index') }}"
            class="flex items-center px-4 py-3 rounded-xl transition-colors font-medium {{ $classGaji }}">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            Gaji
        </a>

        @php
            $activeLaporan = request()->routeIs('laporan.*');
            $classLaporan = $activeLaporan
                ? 'bg-indigo-50 text-indigo-600'
                : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600';
        @endphp

        <a href="{{ route('laporan.index') }}"
            class="flex items-center px-4 py-3 rounded-xl transition-colors font-medium {{ $classLaporan }}">
            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                </path>
            </svg>
            Laporan
        </a>
    </nav>

    <div class="p-4 border-t border-gray-100">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center w-full px-4 py-2 text-red-500 hover:bg-red-50 rounded-xl transition-colors font-medium">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
                Logout
            </button>
        </form>
    </div>
</aside>
