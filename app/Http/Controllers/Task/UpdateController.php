<?php

namespace App\Http\Controllers\Task;

use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Category;
use App\Models\Task;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $updateRequest, Task $task)
    {
        $data = $updateRequest->validated();

        $this->service->update($task, $data);

        //return back()->with('success', 'Задача успешно удалена.');
        return redirect()->route('task.index');

    }
}