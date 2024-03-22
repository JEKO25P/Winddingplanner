@vite('resources/css/app.css')

<div class="bg-gray-100 min-h-screen flex flex-col items-center justify-center px-20">

    <div class="flex flex-row gap-10">
        <h1 class="font-bold text-3xl text-center my-8">Lista de contactos</h1>
        <a href="/dashboard" class="my-8 py-1 px-2 rounded-3xl font-bold bg-indigo-500 hover:bg-indigo-800 text-white"> Regresar </a>
    </div>
        
    


    <div class="bg-white shadow-2xl rounded-lg overflow-x-auto w-full mx-4">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Correo Electrónico</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Teléfono</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Empresa</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($contactos as $contacto)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $contacto->nombre }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $contacto->correo_electronico }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $contacto->telefono }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $contacto->empresa }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-8">
        <a href="{{ url('/create') }}" class="inline-block bg-indigo-500 hover:bg-indigo-800 text-white font-bold py-2 px-6 rounded">Nuevo registro</a>
    </div>
</div>
