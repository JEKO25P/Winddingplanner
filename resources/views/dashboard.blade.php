<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-20">
        <div class="w-96 mx-auto ">
            <div class="bg-white shadow-2xl sm:rounded-lg">
                <div class="p-2 py-5 px-10 text-gray-900">
                
                    {{ __("You're logged in!") }}
                </div>
                <div class="px-32 pb-5">
                    <a href="/contactos" class="bg-indigo-500 hover:bg-indigo-800 text-white px-5 rounded-md font-bold"> Iniciar </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
