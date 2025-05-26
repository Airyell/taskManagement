<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Make sure the Task model exists and is imported

class ArchiveController extends Controller
{
    // Display archived tasks
    public function index()
    {
        $archivedTasks = Task::where('is_archived', true)->get();

        return view('taskManagement.archive', compact('archivedTasks'));
    }

    // Archive a task (optional if you have a form for it)
    public function archive(Request $request)
    {
        $task = Task::find($request->task_id);

        if ($task) {
            $task->is_archived = true;
            $task->save();
        }

        return redirect()->route('taskManagement.Archive');
    }
}
