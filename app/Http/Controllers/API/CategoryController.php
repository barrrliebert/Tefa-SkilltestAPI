<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller; // Ensure Controller is imported correctly

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();
        $user = Auth::user();

        if ($request->has('search')) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        $categories = $query->paginate(10);
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $publishedCategories = Category::where('is_publish', true)->count();

        return response()->json([
            'categories' => $categories,
            'user' => $user,
            'totalUsers' => $totalUsers,
            'totalCategories' => $totalCategories,
            'publishedCategories' => $publishedCategories,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'is_publish' => 'boolean',
        ]);

        $category = Category::create($request->all());

        return response()->json([
            'message' => 'Category created successfully.',
            'category' => $category,
        ], 201);
    }

    public function show(Category $category)
    {
        return response()->json($category);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'is_publish' => 'boolean',
        ]);

        $category->update($request->all());

        return response()->json([
            'message' => 'Category updated successfully.',
            'category' => $category,
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'message' => 'Category deleted successfully.'
        ]);
    }
}
