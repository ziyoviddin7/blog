<?php

namespace App\Http\Controllers\Task;

use App\Http\Requests\Task\StoreRequest;
use App\Models\Category;
use App\Models\Task;

class DestroyController extends BaseController
{
    public function __invoke(Task $task)
    {
        $task->delete();
        return back()->with('success', 'Задача успешно удалена.');
    }
}