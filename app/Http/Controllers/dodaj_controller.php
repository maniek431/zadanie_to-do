<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Notification;
use App\Notifications\task_reminder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class dodaj_controller extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'nazwa_zadania' => 'required|max:255',
            'opis' => 'nullable|ascii',
            'priorytet' => 'required|in:low,medium,high',
            'status' => 'required|in:todo,in_progress,done',
            'termin' => 'nullable|date',
        ]);

        Task::create([
            'nazwa_zadania' => $request->input('nazwa_zadania'),
            'opis' => $request->input('opis'),
            'priorytet' => $request->input('priorytet'),
            'status' => $request->input('status'),
            'termin' => $request->input('termin'),
            'user_id' =>auth()->id(),
        ]);
        $tasksDueTomorrow = DB::table('tasks')
        ->where('user_id', auth()->id())
        ->whereDate('termin', Carbon::tomorrow())
        ->get();
    
    foreach ($tasksDueTomorrow as $task) {
        Notification::route('mail', 'user@example.com')->notify(new task_reminder($task));
    }
        return redirect()->route('dodaj')->with('success', 'Zadanie zostało dodane.');
    }
}