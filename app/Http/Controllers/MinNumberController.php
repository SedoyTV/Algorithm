<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinNumberController extends Controller
{
    public function findMinimum($array)
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

    public function handleRequest(Request $request)
    {
        $arrayString = $request->query('array');
        $array = explode(',', $arrayString);
        $array = array_map('intval', $array);

        if (!empty($array)) {
            $minValue = $this->findMinimum($array);

            return response()->json(['minimum' => $minValue]);
        } else {
            return response()->json(['error' => 'Некорректный или пустой массив!']);
        }
    }
}
