<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeclensionController extends Controller
{
    public function getWordDeclension($number, $word, $word1, $word2)
    {
        $lastDigit = $number % 10;
        $lastTwoDigits = $number % 100;

        if ($lastTwoDigits >= 11 && $lastTwoDigits <= 19) {
            return "$number $word2";
        }

        switch ($lastDigit) {
            case 1:
                return "$number $word";
            case 2:
            case 3:
            case 4:
                return "$number $word1";
            default:
                return "$number $word2";
        }
    }

    public function handleRequest(Request $request)
    {
        $number = $request->query('number');
        $word = $request->query('word');
        $word1 = $request->query('word1');
        $word2 = $request->query('word2');

        if (is_numeric($number) && !empty($word) && !empty($word1) && !empty($word2)) {
            $number = intval($number);
            $declension = $this->getWordDeclension($number, $word, $word1, $word2);

            return response()->json(['declension' => $declension]);
        } else {
            return response()->json(['error' => 'Некорректные параметры запроса!']);
        }
    }
}
