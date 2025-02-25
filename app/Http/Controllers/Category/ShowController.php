<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $user = Auth::user();
        $categories = $user->categories;
        return view('category.show', compact('categories','category', 'user'));
    }
}