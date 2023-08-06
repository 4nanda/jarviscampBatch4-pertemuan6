<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::getAll();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id) {
        return view('tasks.tampil', [
            'tasks' => Task::getById($id)
        ]);
    }
}
