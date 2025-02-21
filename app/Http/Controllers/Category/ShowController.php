<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke(Category $category)
    {
        $categories = Category::all();
        return view('category.show', compact('categories','category'));
    }
}