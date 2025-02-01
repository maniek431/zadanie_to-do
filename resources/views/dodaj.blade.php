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
            {{ __('Dodaj zadanie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('dodaj.add') }}" method="POST">
                        @csrf
                        <center>
                            <p><label for="nazwa_zadania">Nazwa Zadania:</label></p>
                            <input type="text" id="nazwa_zadania" name="nazwa_zadania" required><br>
                
                            <p><label for="opis">Opis:</label></p>
                            <input type="text" id="opis" name="opis"><br>
                
                            <p><label for="priorytet">Priorytet:</label></p>
                            <select id="priorytet" name="priorytet" required>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select><br>
                
                            <p><label for="status">Status:</label></p>
                            <select id="status" name="status" required>
                                <option value="todo">To Do</option>
                                <option value="in_progress">In Progress</option>
                                <option value="done">Done</option>
                            </select><br>
                
                            <p><label for="termin">Termin Wykonania:</label></p>
                            <input type="date" id="termin" name="termin"><br>
                
                            <button type="submit">Dodaj Zadanie</button>
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