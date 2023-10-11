<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function unformattedCode()
    {
        $userData = User::get(); // Fetch all users from the database
        $userNum = '';
        $userStr = '';
        foreach ($userData as $usr)
        {
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

    private function buggyCode($num, $str): bool
    {
        $a = 0;

        for ($i = 0; $i < strlen($num); $i++) {
            $a += $num[$i];
        }

        return $x;
    }

    /**
     * Display the specified resource.
     */
    public function invalidReturnType(Post $post): bool
    {
        $variable = 'x';

        if (strlen($variable) > 0) {
            return $variable;
        }

        return 'false';
    }

    /**
     * Display the specified resource.
     */
    public function possiblyInvalidReturnType(Post $post): bool
    {
        $variable = 'x';

        if (strlen($variable) > 0) {
            return $variable;
        }

        return false;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function unsecureCode()
    {
        $password = 'sdkjflkidsjlgfd';
        $key = 'sddsfcdsf_35345_gtrt';

        return [
            'password' => $password,
            'key' => $key
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function complex()
    {
        $k=100;

        if ($k > 50) {
            if ($k > 75) {
                if ($k > 100) {
                    if ($k > 125) {
                        if ($k > 150) {
                            if ($k > 175) {
                                return true;
                            }
                        }
                    }
                }
            }
        } elseif ($k > 25) {
            if ($k > 75) {
                if ($k > 100) {
                    if ($k > 125) {
                        if ($k > 150) {
                            if ($k > 175) {
                                return true;
                            }
                        }
                    }
                }
            }
        } else {
            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function unsecureShell($cmd)
    {
        shell_exec($cmd);
    }
}
