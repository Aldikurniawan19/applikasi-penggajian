<x-guest-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-50 px-4">

        <div
            class="w-full max-w-[400px] bg-white rounded-[20px] shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-gray-100 p-8">

            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Namira Mart</h1>
                <p class="text-xs text-gray-500 mt-1">Silakan login untuk melanjutkan</p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-xs font-medium text-gray-600 mb-1.5 ml-1">Username / Email</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <input type="email" name="email" :value="old('email')" required autofocus
                            class="pl-11 block w-full rounded-xl border-gray-200 bg-gray-50/50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2.5 transition-all"
                            placeholder="Masukkan email anda">
                    </div>
                </div>

                <div x-data="{ show: false }">
                    <label class="block text-xs font-medium text-gray-600 mb-1.5 ml-1">Password</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-500 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <input :type="show ? 'text' : 'password'" name="password" required
                            autocomplete="current-password"
                            class="pl-11 pr-10 block w-full rounded-xl border-gray-200 bg-gray-50/50 focus:bg-white focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2.5 transition-all"
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
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-red-500" />
                </div>

                <div class="flex items-center justify-between mt-1">
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="remember"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 h-4 w-4">
                        <span class="ms-2 text-xs text-gray-500">Ingat Saya</span>
                    </label>
                    <a href="{{ route('password.request') }}"
                        class="text-xs text-indigo-600 hover:text-indigo-800 font-medium">Lupa Password?</a>
                </div>

                <div class="grid grid-cols-3 gap-3 mt-8 pt-6 border-t border-gray-100">

                    <a href="{{ route('presensi') }}"
                        class="flex items-center justify-center px-2 py-2.5 bg-white border border-gray-300 rounded-lg text-[10px] sm:text-xs font-bold text-gray-700 uppercase tracking-wider shadow-sm hover:bg-gray-50 hover:text-indigo-600 hover:border-indigo-200 transition-all duration-200 text-center">
                        Presensi
                    </a>

                    <button type="submit"
                        class="flex items-center justify-center px-2 py-2.5 bg-gray-900 border border-transparent rounded-lg text-[10px] sm:text-xs font-bold text-white uppercase tracking-wider hover:bg-gray-800 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-all duration-200 shadow-lg shadow-indigo-500/20">
                        {{ __('Masuk') }}
                    </button>

                    <a href="{{ route('slip-gaji') }}"
                        class="flex items-center justify-center px-2 py-2.5 bg-white border border-gray-300 rounded-lg text-[10px] sm:text-xs font-bold text-gray-700 uppercase tracking-wider shadow-sm hover:bg-gray-50 hover:text-indigo-600 hover:border-indigo-200 transition-all duration-200 text-center">
                        Slip Gaji
                    </a>

                </div>
            </form>
        </div>

        <p class="mt-8 text-[10px] text-gray-400 tracking-wide">
            © 2025 Namira Mart System. All rights reserved.
        </p>
    </div>
</x-guest-layout>
