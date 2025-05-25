<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{public function showhistory() {
    return view('taskManagement.History'); // loads Blade template
}
}