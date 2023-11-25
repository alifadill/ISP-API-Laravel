<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Teknisi') }}
        </h2>
    </x-slot>

    <div class="p-6 text-gray-900 dark:text-gray-100 flex flex-wrap">
        @foreach ($data_teknisi['data'] as $teknisi)
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-1/2 m-4 md:w-1/2 lg:w-1/3 xl:w-1/4 p-4">
                <h5 class="text-xl font-semibold mb-2"> {{ $teknisi['name'] }}</h5>
                <p class="text-gray-700 dark:text-gray-300 mb-2">Phone: {{ $teknisi['phone'] }}</p>
                <p class="text-gray-700 dark:text-gray-300 mb-2">NIP: {{ $teknisi['nip'] }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>
