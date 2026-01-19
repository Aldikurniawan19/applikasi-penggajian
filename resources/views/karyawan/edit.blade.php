<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="flex h-screen bg-gray-100 overflow-hidden">
        <x-sidebar />
        <main class="flex-1 ml-64 overflow-y-auto p-8 font-sans">
            <x-breadcrumbs parent="Data Karyawan" title="Edit Karyawan" parentUrl="{{ route('karyawan.index') }}" />

            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Data Karyawan</h2>

                <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                    @csrf
                    @method('PUT') <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" value="{{ $karyawan->nama }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                            <select name="jenis_kelamin"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="Laki-laki"
                                    {{ $karyawan->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan"
                                    {{ $karyawan->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{ $karyawan->tgl_lahir }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">No. Telepon</label>
                            <input type="text" name="no_tlpn" value="{{ $karyawan->no_tlpn }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>
                        <div class="col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alamat Lengkap</label>
                            <textarea name="alamat" rows="3"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ $karyawan->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('karyawan.index') }}"
                            class="px-5 py-2.5 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Batal</a>
                        <button type="submit"
                            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Simpan
                            Perubahan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
