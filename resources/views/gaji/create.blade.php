<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="flex h-screen bg-gray-100 overflow-hidden">
        <x-sidebar />
        <main class="flex-1 ml-64 overflow-y-auto p-8 font-sans">
            <x-breadcrumbs parent="Kelola Gaji" title="Input Gaji" parentUrl="{{ route('gaji.index') }}" />

            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Input Data Gaji</h2>

                <form action="{{ route('gaji.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pilih Karyawan</label>
                            <select name="karyawan_id"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                                <option value="">-- Pilih Nama Karyawan --</option>
                                @foreach ($karyawan as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-2">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Penggajian</label>
                            <input type="date" name="tanggal" value="{{ date('Y-m-d') }}"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Gaji Pokok (Rp)</label>
                            <input type="number" name="gaji_pokok" placeholder="Contoh: 4500000"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                required>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Bonus (Rp)</label>
                            <input type="number" name="bonus" value="0"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Potongan (Rp)</label>
                            <input type="number" name="potongan" value="0"
                                class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                    </div>

                    <div class="flex justify-end gap-4">
                        <a href="{{ route('gaji.index') }}"
                            class="px-5 py-2.5 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Batal</a>
                        <button type="submit"
                            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Simpan
                            Data</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</x-app-layout>
