<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 ">
    <div class="bg-white shadow-2xl rounded-lg p-8 max-w-md w-full ">

        <div class="flex flex-row mb-4 items-center justify-between">
            <h2 class="text-2xl font-bold pl-20 text-center">Agregar Contacto</h2>  
            <a href="/contactos" class="rounded-3xl px-1 mb-4 font-bold bg-indigo-500 hover:bg-indigo-800 text-white">X</a>

        </div>
        

        <form action="{{ route('contactos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="correo_electronico" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico:</label>
                <input type="email" name="correo_electronico" id="correo_electronico" placeholder="Correo Electrónico"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" placeholder="Teléfono"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="mb-4">
                <label for="empresa" class="block text-gray-700 text-sm font-bold mb-2">Empresa:</label>
                <input type="text" name="empresa" id="empresa" placeholder="Empresa"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-center">
                <button type="submit"
                    class="bg-indigo-400 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
            </div>
        </form>
    </div>
</div>
