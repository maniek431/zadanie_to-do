<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\View\View;


class zaktualizuj_controller extends Controller
{
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('zaktualizuj.update', compact('task'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:tasks,id',
            'nazwa_zadania' => 'required|max:255',
            'opis' => 'ascii',
            'priorytet' => 'required|in:low,medium,high',
            'status' => 'required|in:todo,in_progress,done',
            'termin_wykonania' => 'date',
        ]);

        $task = Task::findOrFail($request->input('id'));
        $task->nazwa_zadania = $request->input('nazwa_zadania');
        $task->opis = $request->input('opis');
        $task->priorytet = $request->input('priorytet');
        $task->status = $request->input('status');
        $task->termin_wykonania = $request->input('termin');
        $task->user_id=auth()->id('user_id');

        $task->save();

       
       return redirect()->route('zaktualizuj.edit')->with('success', 'Zadanie zostało zaktualizowane.');
    }
}