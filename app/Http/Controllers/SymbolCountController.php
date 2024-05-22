<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymbolCountController extends Controller
{
    public function countSymbol($inputString):array
    {
        $charCount = [];
        $characters = mb_convert_encoding($inputString, 'UTF-8', 'UTF-8');
        foreach (mb_str_split($characters) as $char) {
            if (isset($charCount[$char])) {
                $charCount[$char]++;
            } else {
                $charCount[$char] = 1;
            }
        }
        return $charCount;
    }

    public function handleRequest(Request $request)
    {
        $inputString = $request->input('text');
        if (!empty($inputString)) {
            $characterCounts = $this->countSymbol($inputString);
            return response()->json($characterCounts);
        }
    }
}


