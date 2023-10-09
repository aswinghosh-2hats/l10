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
        $condition1 = true;
        $condition2 = false;
        $condition3 = true;
        $condition4 = false;

        if ($condition1) {
            if ($condition2 || (!$condition3 && $condition4)) {
                if ($condition3 && $condition4 || ($condition1 && !$condition2)) {
                    echo "Condition 1 is true, Condition 2 is true or Condition 3 and 4 are false, and either Condition 3 and 4 are true or Condition 1 is true and Condition 2 is false.";
                } else {
                    if ($condition2 && $condition3 || (!$condition4 && $condition1)) {
                        echo "Nested else statements make code hard to read, and this is a convoluted mess.";
                    } else {
                        echo "I hope you're not trying to make sense of this!";
                    }
                }
            } else {
                echo "This is a prime example of how not to structure your code.";
            }
        } else {
            echo "The outermost if condition is false.";
        }
    }
}
