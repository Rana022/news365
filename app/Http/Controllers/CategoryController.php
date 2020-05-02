<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        return view('layouts.frontend.partials.header', compact('categories'));
    }
}
