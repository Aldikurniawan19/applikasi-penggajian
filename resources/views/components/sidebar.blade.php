<aside
    class="w-60 bg-white border-r border-gray-100 hidden md:flex flex-col fixed inset-y-0 z-20 shadow-[4px_0_24px_rgba(0,0,0,0.02)]">
    <div class="h-20 flex items-center px-8 border-b border-gray-50/50">
        <div class="flex items-center gap-3">
            <div class="bg-blue-600 text-white p-1.5 rounded-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
                    </path>
                </svg>
            </div>
            <h1 class="text-xl font-bold text-gray-800 tracking-tight">SIPAYROLL</h1>
        </div>
    </div>

    <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto custom-scrollbar">

        <div class="px-4 mb-2 mt-2 text-xs font-semibold text-gray-400 uppercase tracking-wider">
            Main Menu
        </div>

        @php
            function getLinkClass($isActive)
            {
                return $isActive
                    ? 'bg-blue-50 text-blue-600 shadow-sm' 
                    : 'text-gray-500 hover:bg-gray-50 hover:text-gray-900';
            }
        @endphp

        {{-- Dashboard --}}
        @php $activeDashboard = request()->routeIs('dashboard'); @endphp
        <a href="{{ route('dashboard') }}"
            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ getLinkClass($activeDashboard) }}">
            <svg class="w-5 h-5 mr-3 transition-colors {{ $activeDashboard ? 'text-blue-600' : 'text-gray-400 group-hover:text-gray-600' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                </path>
            </svg>
            Dashboard
        </a>

        {{-- Data Master --}}
        @php
            $activeMaster =
                request()->routeIs('data-master.*') ||
                request()->routeIs('users.*') ||
                request()->routeIs('karyawan.*') ||
                request()->routeIs('jabatan.*') ||
                request()->routeIs('kehadiran.*');
        @endphp
        <a href="{{ route('data-master.index') }}"
            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ getLinkClass($activeMaster) }}">
            <svg class="w-5 h-5 mr-3 transition-colors {{ $activeMaster ? 'text-blue-600' : 'text-gray-400 group-hover:text-gray-600' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                </path>
            </svg>
            Data Master
        </a>

        {{-- Keuangan Section --}}
        <div class="px-4 mb-2 mt-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">
            Keuangan
        </div>

        {{-- Gaji --}}
        @php $activeGaji = request()->routeIs('gaji.*'); @endphp
        <a href="{{ route('gaji.index') }}"
            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ getLinkClass($activeGaji) }}">
            <svg class="w-5 h-5 mr-3 transition-colors {{ $activeGaji ? 'text-blue-600' : 'text-gray-400 group-hover:text-gray-600' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            Penggajian
        </a>

        {{-- Laporan --}}
        @php $activeLaporan = request()->routeIs('laporan.*'); @endphp
        <a href="{{ route('laporan.index') }}"
            class="group flex items-center px-4 py-3 text-sm font-medium rounded-xl transition-all duration-200 {{ getLinkClass($activeLaporan) }}">
            <svg class="w-5 h-5 mr-3 transition-colors {{ $activeLaporan ? 'text-blue-600' : 'text-gray-400 group-hover:text-gray-600' }}"
                fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                class="group flex items-center w-full px-4 py-2.5 text-sm font-medium text-gray-500 hover:text-red-600 hover:bg-red-50 rounded-xl transition-all duration-200">
                <svg class="w-5 h-5 mr-3 text-gray-400 group-hover:text-red-500 transition-colors" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                    </path>
                </svg>
                Sign Out
            </button>
        </form>
    </div>
</aside>
