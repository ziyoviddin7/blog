<?php

namespace App\Http\Controllers\Task;

use App\Http\Requests\Task\StoreRequest;
use App\Models\Category;
use App\Models\Task;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();

        $this->service->store($data);

        return redirect()->route('task.index');
    }
}