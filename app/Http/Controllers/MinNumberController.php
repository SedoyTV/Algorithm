<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinNumberController extends Controller
{
    public function FindMinimum($array):int|float|null
    {
        if (empty($array)) {
            return null;
        }
        $minValue = $array[0];
        foreach ($array as $num) {
            if ($num < $minValue) {
                $minValue = $num;
            }
        }
        return $minValue;
    }

    public function HandleRequest(Request $request)
    {
        $arrayString = $request->query('array');
        $array = explode(',', $arrayString);
        $array = array_map('intval', $array);
        if (!empty($array)) {
            $minValue = $this->findMinimum($array);
            return response()->json(['Минимальное число' => $minValue], 200, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
