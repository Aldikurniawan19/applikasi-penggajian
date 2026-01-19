<x-app-layout>
    {{-- Pastikan slot header kosong agar tidak double dengan topbar buatan kita --}}
    <x-slot name="header"></x-slot>

    <div class="min-h-screen bg-gray-50 flex">

        <x-sidebar />

        <div class="flex-1 flex flex-col ml-72 transition-all duration-300 w-full">
            <main class="p-8">

                <div class="mb-8">
                    <span class="text-blue-600 font-bold tracking-wider uppercase text-xs">
                        NAMIRA MART
                    </span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-1">Data Master</h2>
                    <p class="text-gray-500 text-sm mt-2">
                        Kelola data pengguna, karyawan, jabatan, dan kehadiran dalam satu pintu.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                    <a href="{{ route('users.index') }}" class="group relative block h-full">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col items-center text-center">
                            <div
                                class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">Data Pengguna</h3>
                            <p class="text-xs text-gray-400 mt-1">Manajemen User System</p>
                        </div>
                    </a>

                    <a href="{{ route('karyawan.index') }}" class="group relative block h-full">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col items-center text-center">
                            <div
                                class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">Data Karyawan</h3>
                            <p class="text-xs text-gray-400 mt-1">Daftar Karyawan Aktif</p>
                        </div>
                    </a>

                    <a href="{{ route('jabatan.index') }}" class="group relative block h-full">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col items-center text-center">
                            <div
                                class="w-16 h-16 bg-orange-50 text-orange-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">Data Jabatan</h3>
                            <p class="text-xs text-gray-400 mt-1">Struktur Organisasi</p>
                        </div>
                    </a>

                    <a href="{{ route('kehadiran.index') }}" class="group relative block h-full">
                        <div
                            class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 h-full flex flex-col items-center text-center">
                            <div
                                class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-green-600 group-hover:text-white transition-colors duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-800">Data Kehadiran</h3>
                            <p class="text-xs text-gray-400 mt-1">Absensi & Shift</p>
                        </div>
                    </a>

                </div>
            </main>
        </div>
    </div>
</x-app-layout>
