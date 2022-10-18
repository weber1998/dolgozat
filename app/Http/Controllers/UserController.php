<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = response()->json(User::all());
        return $users;
    }

    public function show($id) {
        $users = response()->json(User::find($id));
        return $users;
    }

    public function destroy($id) {
        User::find($id)->delete();
    }

    public function store(Request $request) {
        $user = new Task();
        $user->title = $request->title;
        $user->description = $request->description;
        $user->end_date = $request->end_date;
        $user->user_id = $request->user_id;
        $user->status = $request->status;
        $user->save();
    }

    public function update(Request $request, $id) {
        $user = Task::find($id);
        $user->title = $request->title;
        $user->description = $request->description;
        $user->end_date = $request->end_date;
        $user->user_id = $request->user_id;
        $user->status = $request->status;
        $user->save();
    }

    public function newView() {
        $users = User::all();
        return view('user.new',['users' => $users]);
    }

    public function editView($id) {
        $users = User::all();
        $task = Task::find($id);
        return view('task.edit',['users' => $users, 'task' => $task]);
    }

    public function listView() {
        $tasks = Task::all();
        return view('task.list',['tasks' => $tasks]);
    }
}
