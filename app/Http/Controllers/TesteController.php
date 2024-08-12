<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2)
    {
        // return "A soma entre $p1 + $p2 é:" . ($p1 + $p2);
        // return view('site.teste', ['p1' => $p1, 'p2' => $p2, 'soma' => $p1 + $p2]); // Array Assosiativo
        // return view('site.teste')->with('p1', $p1)->with('p2', $p2); // With
        return view('site.teste', compact('p1', 'p2')); // Compact

    }
}
