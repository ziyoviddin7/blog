<?php

namespace App\Http\Controllers\Task;

use App\Models\Category;
use App\Models\Task;

class ShowController extends BaseController
{
    public function __invoke(Task $task)
    {
        $categories = Category::all();
        return view('task.show', compact('task', 'categories'));
    }
}