<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::all();
        return view('category', ['categorys' => $categorys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $category = new Category();
        $category->industry = request('industry');
        $category->experience_level = request('experience');
        $category->employement_type = request('employement');
        $category->save();
        return view('category_create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('category_show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category_edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $category = Category::find($id);
        $category->industry = request('industry');
        $category->experience_level = request('experience_level');
        $category->employement_type = request('employement_type');
        $category->save();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
