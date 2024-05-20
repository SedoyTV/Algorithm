<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OddSumController extends Controller
{
    public function sumOddNumbers($array)
    {
        $sum = 0;
        foreach ($array as $num) {
            if ($num % 2 !== 0) {
                $sum += $num;
            }
        }
        return $sum;
    }

    public function handleRequest(Request $request)
    {
        $arrayString = $request->query('array');
        $array = explode(',', $arrayString);
        $array = array_map('intval', $array);

        if (!empty($array)) {
            $sumOdd = $this->sumOddNumbers($array);

            return response()->json(['sumOdd' => $sumOdd]);
        } else {
            return response()->json(['error' => 'Некорректный или пустой массив!']);
        }
    }
}

