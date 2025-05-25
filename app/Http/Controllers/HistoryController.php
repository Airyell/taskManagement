<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
   public function index()
{
    $items = History::with('user')->latest()->get();
    return view('taskManagement.history', compact('items'));
}

    public function store(Request $request)
{
    History::create([
        'action' => $request->action,
        'user_id' => auth()->id(), // or null if not logged in
    ]);

    return redirect()->route('taskManagement.History.form')->with('success', 'History added!');
}

}
