<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class wyswietl_controller extends Controller
{
    public function index(Request $request):View
    {
        $query = DB::table('tasks') -> where('user_id', auth()->id());

        if ($request->has('sort')) {
            if ($request->sort == 'nazwa_zadania') {
                $query->orderBy('nazwa_zadania', 'asc');
            } elseif ($request->sort == 'termin') {
                $query->orderBy('termin', 'asc');
            } elseif ($request->sort == 'priorytet') {
                $query->orderBy('priorytet', 'asc');
            } elseif ($request->sort == 'status') {
                $query->orderBy('status', 'asc');
            }
        }
        $wyswietl = $query->get();



        return view('wyswietl',['wyswietl'=>$wyswietl]);
    }
}