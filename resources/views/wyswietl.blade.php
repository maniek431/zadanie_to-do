<!DOCTYPE html>
<html>
<head>
    <title>Wyświetl Zadania</title>
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
                table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
            </style>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Wyświetl zadania') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                       <center> <form method="GET" action="{{ route('wyswietl.index') }}">
                            <button type="submit" name="sort" value="status">Sortuj według statusu</button>
                            <button type="submit" name="sort" value="priorytet">Sortuj według priorytetu</button>
                            <button type="submit" name="sort" value="termin">Sortuj według terminu wykonania</button>
                        </form></center>
                        <br>
                        <p>
                        <center><table>
                            <thead>
                                <tr>
                            <th>Nazwa Zadania</th>
                                    <th>Opis</th>
                                    <th>Priorytet</th>
                                    <th>Status</th>
                                    <th>Termin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wyswietl as $task)
                                    <tr>
                                        <td>{{ $task->nazwa_zadania }}</td>
                                        <td>{{ $task->opis }}</td>
                                        <td>{{ $task->priorytet }}</td>
                                        <td>{{ $task->status }}</td>
                                        <td>{{ $task->termin }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table></center></p>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>