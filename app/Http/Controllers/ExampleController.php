<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function create()
    {
        return view('example.create');
    }

    public function result(Request $request)
    {
        $request->validate([
            'n' => 'required|integer|min:0'
        ]);

        $n = $request->input('n');

        $sequence = $this->generateFibonacci($n, 10);

        return view('example.result', compact('sequence', 'n'));
    }

    private function generateFibonacci($start, $count)
    {
        $fib = [$start, $start + 1];

        for ($i = 2; $i < $count; $i++) {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib;
    }
}
