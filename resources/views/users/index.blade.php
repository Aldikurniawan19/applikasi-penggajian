<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="flex h-screen bg-gray-50 overflow-hidden font-sans">

        <x-sidebar />

        <main class="flex-1 ml-64 overflow-y-auto bg-gray-50">
            <div class="py-10 px-8">
                <div class="max-w-7xl mx-auto">
                    <x-breadcrumbs parent="Data Master" title="Data Pengguna"
                        parentUrl="{{ route('data-master.index') }}" />
                </div>

                <div class="max-w-7xl mx-auto mb-8 flex justify-between items-end">
                    <div>
                        <h1 class="text-sm font-semibold text-indigo-600 tracking-wide uppercase">Namira Mart</h1>
                        <h2 class="text-3xl font-bold text-gray-900 mt-1">Data Pengguna</h2>
                        <p class="mt-2 text-sm text-gray-500">Kelola akses dan data pengguna sistem di sini.</p>
                    </div>

                    <a href="{{ route('users.create') }}"
                        class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 border border-transparent rounded-lg font-medium text-sm text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 ease-in-out gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Tambah User</span>
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
                                            Nama Lengkap
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Username
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Password
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Role
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div
                                                        class="h-8 w-8 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-xs mr-3">
                                                        {{ substr($user->name, 0, 1) }}
                                                    </div>
                                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $user->username }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400 font-mono">
                                                ••••••••
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100">
                                                    {{ $user->role }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                <div class="flex justify-center items-center space-x-4">
                                                    <form id="delete-form-{{ $user->id }}"
                                                        action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                        class="inline-block">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="button"
                                                            onclick="confirmDelete(event, 'delete-form-{{ $user->id }}')"
                                                            class="text-red-500 hover:text-red-700 transition-transform duration-200 hover:scale-110 pt-1"
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

                        {{-- <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                            {{ $users->links() }} 
                        </div> --}}
                    </div>
                </div>

            </div>
        </main>
    </div>
</x-app-layout>
