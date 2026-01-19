<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="flex h-screen bg-gray-50 overflow-hidden font-sans">

        <x-sidebar />

        <main class="flex-1 ml-64 overflow-y-auto bg-gray-50">
            <div class="py-10 px-8">
                <div class="max-w-7xl mx-auto">
                    <x-breadcrumbs parent="Data Master" title="Data Karyawan"
                        parentUrl="{{ route('data-master.index') }}" />
                </div>

                <div class="max-w-7xl mx-auto mb-8 flex justify-between items-end">
                    <div>
                        <h1 class="text-sm font-semibold text-indigo-600 tracking-wide uppercase">Namira Mart</h1>
                        <h2 class="text-3xl font-bold text-gray-900 mt-1">Data Karyawan</h2>
                        <p class="mt-2 text-sm text-gray-500">Kelola informasi, kontak, dan alamat karyawan.</p>
                    </div>

                    <a href="{{ route('karyawan.create') }}"
                        class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-lg font-medium text-sm text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 ease-in-out gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Tambah Karyawan</span>
                    </a>
                </div>

                <div class="max-w-7xl mx-auto">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Nama Karyawan
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Jenis Kelamin
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Tanggal Lahir
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            No. Telepon
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Alamat
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($karyawan as $k)
                                        <tr
                                            class="border-b border-gray-100 {{ $loop->odd ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-200 transition-colors">
                                            <td class="p-4 font-bold text-gray-900">{{ $loop->iteration }}</td>
                                            <td class="p-4 font-medium">{{ $k->nama }}</td>
                                            <td class="p-4">
                                                <span
                                                    class="px-2 py-1 rounded text-xs font-bold {{ $k->jenis_kelamin == 'Laki-laki' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                                    {{ substr($k->jenis_kelamin, 0, 1) }}
                                                </span>
                                            </td>
                                            <td class="p-4 text-sm">
                                                {{ \Carbon\Carbon::parse($k->tgl_lahir)->format('d M Y') }}</td>
                                            <td class="p-4 text-sm font-mono">{{ $k->no_tlpn }}</td>
                                            <td class="p-4 text-sm truncate max-w-xs" title="{{ $k->alamat }}">
                                                {{ Str::limit($k->alamat, 20) }}</td>
                                            <td class="p-4 text-center">
                                                <div class="flex justify-center items-center space-x-4">
                                                    <a href="{{ route('karyawan.edit', $k->id) }}"
                                                        class="text-indigo-600 hover:text-indigo-900 hover:scale-110 transition-transform"
                                                        title="Edit">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <form id="delete-form-{{ $k->id }}"
                                                        action="{{ route('karyawan.destroy', $k->id) }}" method="POST"
                                                        class="inline-block">
                                                        @csrf @method('DELETE')
                                                        <button type="button"
                                                            onclick="confirmDelete(event, 'delete-form-{{ $k->id }}')"
                                                            class="text-red-500 hover:text-red-700 hover:scale-110 transition-transform pt-1"
                                                            title="Hapus">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</x-app-layout>
