<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\MyBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = MyBlog::all();

        error_log(count($blogs));

        $blogData = [];

        foreach($blogs as $blog){
            $blogData[] = "$blog->title - $blog->description<br>";
        }

        return $blogData;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = MyBlog::findOrFail($id);
        
        return "$blog->title - $blog->description";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
