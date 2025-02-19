<?php

namespace App\Http\Controllers\Task;

use App\Models\Category;
use App\Models\Task;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('task.create', compact('categories'));
    }
}