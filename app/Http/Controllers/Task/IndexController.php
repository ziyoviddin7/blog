<?php

namespace App\Http\Controllers\Task;

use App\Models\Task;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $tasks = Task::paginate(9);
        return view('task.index', compact('tasks'));
    }
}