<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-50 px-4">

        <div
            class="w-full max-w-[400px] bg-white rounded-[20px] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 p-8 relative">

            <a href="{{ route('login') }}"
                class="absolute top-4 left-4 text-gray-400 hover:text-gray-600 transition-colors"
                title="Kembali ke Login">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>

            <div class="text-center mb-6">
                <div
                    class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.131A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4">
                        </path>
                    </svg>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Presensi Karyawan</h1>
                <p class="text-xs text-gray-500 mt-1">Namira Mart System</p>
            </div>

            <div class="text-center mb-8 bg-gray-50 rounded-xl py-3 border border-gray-100">
                <p class="text-xs text-gray-500 font-medium uppercase tracking-wider mb-1">Waktu Saat Ini</p>
                <div id="realtime-clock" class="text-3xl font-mono font-bold text-gray-800 tracking-widest">
                    --:--:--
                </div>
                <p class="text-[10px] text-gray-400 mt-1" id="current-date">...</p>
            </div>

            <form method="POST" action="#" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1.5 ml-1">Nama / ID Karyawan</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-emerald-500 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0h4m-4 0a1 1 0 00-1 1v3a1 1 0 001 1h2a1 1 0 001-1V6a3 3 0 10-6 0z">
                                </path>
                            </svg>
                        </div>
                        <input type="text" name="employee_id" required autofocus
                            class="pl-11 block w-full rounded-xl border-gray-200 bg-gray-50/50 focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-all"
                            placeholder="Masukkan Nama atau ID">
                    </div>
                </div>

                <div x-data="{ show: false }">
                    <label class="block text-xs font-medium text-gray-600 mb-1.5 ml-1">Password / PIN</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-emerald-500 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <input :type="show ? 'text' : 'password'" name="password" required
                            class="pl-11 pr-10 block w-full rounded-xl border-gray-200 bg-gray-50/50 focus:bg-white focus:border-emerald-500 focus:ring-emerald-500 sm:text-sm py-2.5 transition-all"
                            placeholder="••••••••">
                        <button type="button" @click="show = !show"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 cursor-pointer">
                            <svg x-show="!show" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.05 10.05 0 011.578-2.9m2.275-2.275A10.05 10.05 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.05 10.05 0 01-1.578 2.9" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 3l18 18" />
                            </svg>
                            <svg x-show="show" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                style="display:none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit"
                    class="w-full py-3 bg-emerald-600 text-white rounded-xl text-xs font-bold tracking-wider hover:bg-emerald-700 shadow-lg shadow-emerald-600/20 transition-all transform hover:-translate-y-0.5 uppercase mt-2">
                    Kirim Presensi
                </button>

            </form>
        </div>

        <p class="mt-8 text-center text-[10px] text-gray-400 tracking-wide">
            © 2025 Namira Mart System.
        </p>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', {
                hour12: false
            });
            const dateString = now.toLocaleDateString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            document.getElementById('realtime-clock').textContent = timeString;
            document.getElementById('current-date').textContent = dateString;
        }
        setInterval(updateClock, 1000);
        updateClock(); // Jalankan langsung
    </script>
</x-guest-layout>
