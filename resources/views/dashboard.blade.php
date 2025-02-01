<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Witamy w panelu głównym') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Wybierz działanie z górnego menu") }}
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="mt-3 space-y-1">
        @foreach ($errors->all() as $error)
            <div class="text-red-600">{{ $error }}</div>
        @endforeach
    </div>
@endif
</x-app-layout>
