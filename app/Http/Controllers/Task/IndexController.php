<?php

namespace App\Http\Controllers\Task;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $user = Auth::user();
        $categories = Category::all();
        $tasks = Task::paginate(10);
        return view('task.index', compact('tasks', 'categories', 'user'));
    }
}