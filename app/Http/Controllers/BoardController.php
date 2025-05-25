<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class BoardController extends Controller
{
    public function showboard()
    {
        $tasksTodo = Task::where('status', 'To do')->get();
        $tasksInProgress = Task::where('status', 'In progress')->get();
        $tasksDone = Task::where('status', 'Done')->get();

        return view('taskManagement.Board', compact('tasksTodo', 'tasksInProgress', 'tasksDone'));
    }
}
