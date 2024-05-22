<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeclensionController extends Controller
{
    private function DeclensionWord($number):string
    {
        $lastDigit = $number % 10;
        $lastTwoDigits = $number % 100;
        if ($lastDigit == 1 && $lastTwoDigits != 11) {
            return 'студент';
        } elseif (in_array($lastDigit, [2, 3, 4]) && !in_array($lastTwoDigits, [12, 13, 14])) {
            return 'студента';
        } else {
            return 'студентов';
        }
    }

    public function HandleRequest(Request $request)
    {
        $number = $request->input('number', null);
        $number = intval($number);
        $studentWord = $this->DeclensionWord($number);
        return response()->json(['На учебе' => "$number $studentWord"], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
