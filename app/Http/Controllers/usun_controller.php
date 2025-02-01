<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class usun_controller extends Controller
{
    public function usun(Request $request)
    {
        $data = $request->validate([
            'nazwa_zadania' => 'required',
        ]);

        DB::table('tasks')->where('nazwa_zadania', $data['nazwa_zadania'])->delete();

        return redirect('/usun')->with('success', 'Rekord został usunięty.');
    }
}
?>