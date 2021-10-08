<?php

namespace App\Http\Controllers;

use App\Models\PostGroup;
use Illuminate\Http\Request;

class PostGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.postgroup.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostGroup  $postGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PostGroup $postGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostGroup  $postGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PostGroup $postGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostGroup  $postGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostGroup $postGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostGroup  $postGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostGroup $postGroup)
    {
        //
    }
}
