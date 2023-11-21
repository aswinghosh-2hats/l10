<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostImageRequest;
use App\Http\Requests\UpdatePostImageRequest;
use App\Models\PostImage;

class PostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Define the size of the 2D grid
        $rows = 5;
        $cols = 5;
        
        // Create a 2D array and fill it with random values
        $grid = [];
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $grid[$i][$j] = rand(1, 100); // Fill with random values between 1 and 100
            }
        }
        
        // Print the original grid
        echo "Original Grid:\n";
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo $grid[$i][$j] . "\t";
            }
            echo "\n";
        }
        
        // Apply a filter operation to each element in the grid (e.g., add 10 to each element)
        echo "\nApplying Filter (Adding 10 to each element):\n";
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                $grid[$i][$j] += 10; // Add 10 to each element
            }
        }
        
        // Print the modified grid
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo $grid[$i][$j] . "\t";
            }
            echo "\n";
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rows = 5;
$cols = 5;
$grid = [];
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $grid[$i][$j] = rand(1, 100);
    }
}
echo "Original Grid:\n";
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        echo $grid[$i][$j] . "\t";
    }
    echo "\n";
}
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PostImage $postImage)
    {
        $deprecatedReference = 42;

        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        while (list($key, $value) = each($array)) {
            echo "{$key}: {$value}\n";
        }

        return $deprecatedReference;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostImage $postImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostImageRequest $request, PostImage $postImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostImage $postImage)
    {
        $password = 'sdgdfghfhfghgf';
        return $password;
    }
}
