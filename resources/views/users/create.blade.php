<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="flex h-screen bg-gray-100 overflow-hidden">
        <x-sidebar />

        <main class="flex-1 ml-64 overflow-y-auto p-8 font-sans">
            <x-breadcrumbs parent="Data Pengguna" title="Tambah User" parentUrl="{{ route('users.index') }}" />

            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah User Baru</h2>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-50 text-red-600 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('users.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Role (Jabatan)</label>
                            <select name="role"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="Admin">Admin</option>
                                <option value="Kasir">Kasir</option>
                                <option value="Owner">Owner</option>
                                <option value="Staff Gudang">Staff Gudang</option>
                                <option value="Driver">Driver</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password" name="password"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('users.index') }}"
                            class="px-5 py-2.5 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Batal</a>
                        <button type="submit"
                            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Simpan
                            User</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
