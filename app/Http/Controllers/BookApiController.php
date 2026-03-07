<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookApiController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 1, 'title' => 'Laravel Basics', 'author' => 'John Doe'],
            ['id' => 2, 'title' => 'REST API Guide', 'author' => 'Jane Smith']
        ]);
    }

    public function store(Request $request)
    {
        $book = [
            'title' => $request->input('title'),
            'author' => $request->input('author')
        ];

        return response()->json([
            'message' => 'Book created',
            'data' => $book
        ], Response::HTTP_CREATED);
    }

    public function show(string $id)
    {
        return response()->json([
            'id' => $id,
            'title' => 'Example Book'
        ]);
    }

    public function update(Request $request, string $id)
    {
        return response()->json([
            'message' => "Book $id updated"
        ]);
    }

    public function destroy(string $id)
    {
        return response()->json([
            'message' => "Book $id deleted"
        ]);
    }
}
