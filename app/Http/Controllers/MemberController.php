<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member; // make sure Member model exists

class MemberController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->query('q', '');
        $members = Member::where('name', 'like', "%$query%")->limit(10)->get(['id', 'name']);
        return response()->json($members);
    }
    public function showmember()
{
    $members = Member::all(); // Or any filtering logic
    return view('taskManagement.Member', compact('members')); // Replace with your actual view
}

}
