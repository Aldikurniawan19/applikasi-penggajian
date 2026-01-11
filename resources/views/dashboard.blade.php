<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="flex h-screen bg-gray-50 overflow-hidden font-sans">

        <x-sidebar />

        <main class="flex-1 ml-64 overflow-y-auto bg-gray-50">
            <div class="py-10 px-8">

                <div class="max-w-7xl mx-auto mb-10">
                    <div
                        class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 flex flex-col md:flex-row items-center justify-between">
                        <div>
                            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">
                                Selamat Datang, Admin! 👋
                            </h1>
                            <p class="text-gray-500 mt-2 text-lg">
                                Sistem Informasi Penggajian <span class="text-indigo-600 font-bold">Namira Mart</span>.
                            </p>
                            <p class="text-sm text-gray-400 mt-1">Kelola data karyawan, gaji, dan laporan dengan mudah.
                            </p>
                        </div>
                        <div class="hidden md:block opacity-10">
                            <svg class="w-32 h-32 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <a href="{{ route('users.index') }}"
                        class="group relative bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md hover:border-indigo-300 transition-all duration-300">
                        <div class="absolute top-6 right-6 text-gray-300 group-hover:text-indigo-500 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-14 h-14 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-800 group-hover:text-blue-600 transition-colors">
                                    Data Pengguna</h3>
                                <p class="text-xs text-gray-500 mt-1">Manajemen akun admin & staff</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('karyawan.index') }}"
                        class="group relative bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md hover:border-indigo-300 transition-all duration-300">
                        <div class="absolute top-6 right-6 text-gray-300 group-hover:text-indigo-500 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-14 h-14 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-800 group-hover:text-indigo-600 transition-colors">
                                    Data Karyawan</h3>
                                <p class="text-xs text-gray-500 mt-1">Database lengkap pegawai</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('kehadiran.index') }}"
                        class="group relative bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md hover:border-indigo-300 transition-all duration-300">
                        <div class="absolute top-6 right-6 text-gray-300 group-hover:text-indigo-500 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-800 group-hover:text-emerald-600 transition-colors">
                                    Data Kehadiran</h3>
                                <p class="text-xs text-gray-500 mt-1">Rekap absensi harian</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('jabatan.index') }}"
                        class="group relative bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md hover:border-indigo-300 transition-all duration-300">
                        <div class="absolute top-6 right-6 text-gray-300 group-hover:text-indigo-500 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-14 h-14 bg-amber-50 text-amber-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-800 group-hover:text-amber-600 transition-colors">
                                    Data Jabatan</h3>
                                <p class="text-xs text-gray-500 mt-1">Struktur posisi & tunjangan</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('gaji.index') }}"
                        class="group relative bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md hover:border-indigo-300 transition-all duration-300">
                        <div
                            class="absolute top-6 right-6 text-gray-300 group-hover:text-indigo-500 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-14 h-14 bg-rose-50 text-rose-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-800 group-hover:text-rose-600 transition-colors">
                                    Data Gaji</h3>
                                <p class="text-xs text-gray-500 mt-1">Input & kelola gaji karyawan</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('laporan.index') }}"
                        class="group relative bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:shadow-md hover:border-indigo-300 transition-all duration-300">
                        <div
                            class="absolute top-6 right-6 text-gray-300 group-hover:text-indigo-500 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-14 h-14 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3
                                    class="text-lg font-bold text-gray-800 group-hover:text-purple-600 transition-colors">
                                    Laporan</h3>
                                <p class="text-xs text-gray-500 mt-1">Cetak slip & rekap bulanan</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </main>
    </div>
</x-app-layout>
