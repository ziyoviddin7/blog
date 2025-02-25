<?php

namespace App\Http\Controllers\Task;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $user = Auth::user();
        $categories = $user->categories;
        return view('task.create', compact('categories', 'user'));
    }
}