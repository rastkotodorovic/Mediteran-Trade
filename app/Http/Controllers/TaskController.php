<?php

namespace App\Http\Controllers;

use App\Task;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('admin.admin', [
            'tasks' => Task::all(),
            'users' => User::all(),
        ]);
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->validated());

        return back();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function destroy(Task $task)
    {
        $task->delete();

        return back();
    }
}
