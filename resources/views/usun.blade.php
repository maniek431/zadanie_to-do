<x-app-layout>
    <x-slot name="header">
        <style>
            button 
            {
                color:white;
                font-size: 15px;
                border-width: 10px;
                border-color: black;
                border-radius: 6px;
                background-color:rgb(0, 0, 0);
                margin-top: 10px;
            }
            </style>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuń zadanie') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
                    <form action="{{ route('usun') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <center><p><label for="nazwa_zadania">Nazwa Zadania:</label></p>
                        <input type="text" id="nazwa_zadania" name="nazwa_zadania" required><br>
                        <button type="submit">Usuń Zadanie</button>
                        </center>
                    </form>
                    @if ($errors->any())
                    <div class="mt-3 space-y-1">
                        @foreach ($errors->all() as $error)
                            <div class="text-red-600">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
