<?php

namespace App\Http\Controllers\Task;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class EditController extends BaseController
{
    public function __invoke(Task $task)
    {
        $user = Auth::user();
        $categories = $user->categories;
        return view('task.edit', compact('task', 'categories', 'user'));
    }
}