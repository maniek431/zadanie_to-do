<!DOCTYPE html>
<html>
<head>
    <title>Zaktualizuj Zadanie</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <style>
                button {
                    color: white;
                    font-size: 15px;
                    border-width: 10px;
                    border-color: black;
                    border-radius: 6px;
                    background-color: rgb(0, 0, 0);
                    margin-top: 10px;
                }
            </style>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Zaktualizuj zadanie') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form action="{{ route('zaktualizuj.edit', ['id' => $task->id]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $task->id }}">
                            <label for="nazwa_zadania">Nazwa Zadania:</label>
                            <input type="text" id="nazwa_zadania" name="nazwa_zadania" value="{{ $task->nazwa_zadania }}" required><br>

                            <label for="opis">Opis:</label>
                            <input type="text" id="opis" name="opis" value="{{ $task->opis }}"><br>

                            <label for="priorytet">Priorytet:</label>
                            <select id="priorytet" name="priorytet" required>
                                <option value="low" {{ $task->priorytet == 'low' ? 'selected' : '' }}>Low</option>
                                <option value="medium" {{ $task->priorytet == 'medium' ? 'selected' : '' }}>Medium</option>
                                <option value="high" {{ $task->priorytet == 'high' ? 'selected' : '' }}>High</option>
                            </select><br>

                            <label for="status">Status:</label>
                            <select id="status" name="status" required>
                                <option value="todo" {{ $task->status == 'todo' ? 'selected' : '' }}>To Do</option>
                                <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="done" {{ $task->status == 'done' ? 'selected' : '' }}>Done</option>
                            </select><br>

                            <label for="termin_wykonania">Termin Wykonania:</label>
                            <input type="date" id="termin_wykonania" name="termin_wykonania" value="{{ $task->termin_wykonania }}"><br>

                            <button type="submit">Zaktualizuj Zadanie</button>
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
</body>
</html>