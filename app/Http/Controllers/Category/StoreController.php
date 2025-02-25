<?php

namespace App\Http\Controllers\Category;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'title' => 'string',
            'user_id' => ''
        ]);

        $data['user_id'] = Auth::id();

        Category::firstOrCreate($data);

        return back()->with('success', 'Задача успешно удалена.');

    }
}