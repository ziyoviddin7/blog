<?php

namespace App\Http\Controllers\Task;

use App\Models\Category;
use App\Models\Task;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $tasks = Task::paginate(10);
        return view('task.index', compact('tasks', 'categories'));
    }
}