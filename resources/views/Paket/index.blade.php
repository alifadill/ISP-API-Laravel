<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Paket') }}
        </h2>
    </x-slot>

    <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap">
        @foreach ($data_paket['data'] as $paket)
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-1/2 m-4 md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                <h5 class="text-xl font-semibold mb-2"> {{ $paket['name'] }}</h5>
                <p class="text-gray-700 dark:text-gray-300 mb-2">Harga: {{ $paket['price'] }}</p>
                <p class="text-gray-700 dark:text-gray-300 mb-2">Deskripsi: {{ $paket['description'] }}</p>
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Pilih Paket</button>
            </div>
        @endforeach
    </div>
</x-app-layout>
