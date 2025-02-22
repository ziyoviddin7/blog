<?php

namespace App\Http\Controllers\Task;

use App\Models\Category;
use App\Models\Task;

class EditController extends BaseController
{
    public function __invoke(Task $task)
    {
        $categories = Category::all();
        return view('task.edit', compact('task', 'categories'));
    }
}