<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OddSumController extends Controller
{
    public function SumOdd($array):int
    {
        $sum = 0;
        foreach ($array as $num) {
            if ($num % 2 !== 0) {
                $sum += $num;
            }
        }
        return $sum;
    }

    public function HandleRequest(Request $request)
    {
        $arrayString = $request->query('array');
        $array = explode(',', $arrayString);
        $array = array_map('intval', $array);
        if (!empty($array)) {
            $sumOdd = $this->sumOdd($array);
            return response()->json(['Сумма нечетных чисел' => $sumOdd], 200, [], JSON_UNESCAPED_UNICODE);
        }
    }
}
