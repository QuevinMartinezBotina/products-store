<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="bg-green-500 text-white font-bold py-2 px-4 rounded mb-4 relative">
                    {{ session('success') }}
                    <button onclick="this.parentElement.style.display='none'" class="absolute top-0 right-0 mt-2 mr-2">
                        &times;
                    </button>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex justify-end ">
                    <a href="{{ route('permissions.create') }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
                </div>

                <table class="table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td class="border px-4 py-2">{{ $permission->id }}</td>
                                <td class="border px-4 py-2">{{ $permission->name }}</td>
                                <td class="border px-4 py-2">{{ $permission->description }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('permissions.show', $permission->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>
                                    <a href="{{ route('permissions.edit', $permission->id) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
                                        id="deleteForm-{{ $permission->id }}" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="showConfirmationModal({{ $permission->id }})"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </button>
                                    </form>

                                    <!-- Modal de Confirmación -->
                                    <div id="confirmModal"
                                        class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                                        <div class="bg-white rounded-lg shadow-lg w-96 p-6">
                                            <h2 class="text-lg font-bold text-gray-800">¿Estás seguro?</h2>
                                            <p class="text-gray-600 mt-2">
                                                Esta acción eliminará el registro de forma permanente. ¿Quieres
                                                continuar?
                                            </p>
                                            <div class="flex justify-end mt-4 space-x-2">
                                                <!-- Botón Cancelar -->
                                                <button onclick="hideConfirmationModal()"
                                                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded transition">
                                                    Cancelar
                                                </button>
                                                <!-- Botón Confirmar -->
                                                <button id="confirmDeleteButton"
                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded transition">
                                                    Eliminar
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/custom.js') }}"></script>

</x-app-layout>
