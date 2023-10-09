<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use Str;

class PostController extends Controller
{
    public function index()
    {
        $password = 'jhrg8nn34545';
        $accessCode = 'defrgt673nnds777dfg76765dfg';
    }

    private function processUser($num, $str)
    {
        echi('Hello World');
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $randomString = Str::random(16);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $asciiString = Str::ascii('Laravel');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
