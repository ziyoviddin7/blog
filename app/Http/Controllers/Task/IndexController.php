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
        $categories = $user->categories;
        $tasks = $user->tasks;
        return view('task.index', compact('tasks', 'categories', 'user'));
    }
}