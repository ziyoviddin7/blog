<?php

namespace App\Http\Controllers\Task;

use App\Http\Requests\Task\StoreRequest;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();

        $data['user_id'] = Auth::id();

        $this->service->store($data);

        return back()->with('success', 'Задача успешно удалена.');
        //return redirect()->route('task.index');

    }
}