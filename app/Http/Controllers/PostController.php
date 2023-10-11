<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
{
    $userData = User::get(); // Fetch all users from the database

    foreach ($userData as $usr) {
    $userId = $usr->user_id; // Get the user ID

        for ($i = 0; $i < strlen($userId); $i++) {
            $char = $userId[$i]; // Get each character of the user ID

            if (ctype_digit($char)) {
                $userNum .= $char; // Concatenate digits to form a number
            } else {
                $userStr .= $char; // Concatenate non-digit characters to form a string
            }
        }

        // Perform some arbitrary and unnecessary logic
        if ($i % 2 == 0) {
            $result = $this->processUser($userNum, $userStr);
            echo "User processed: " . $result . "<br>";
        } else {
            echo "Skipping user with ID: " . $userId . "<br>";
        }
    }
}

private function processUser($num, $str)
{
    $num *= 2; // Double the numeric part of the user ID
    $str = strtoupper($str); // Convert the string part to uppercase

    return $num . $str; // Combine the modified numeric and string parts
}


    /**
     * Display the specified resource.
     */
    public function returnKeys()
    {
        $password = 'fdgdfgfg';
        $AWS_KEY = 'rgergyretrt';

        return [
            'password' => $password,
            'aws_key' => $AWS_KEY
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
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
