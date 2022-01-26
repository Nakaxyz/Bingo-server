<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RamdomNumberController extends Controller
{
    public function index(Request $request)
    {
        $str_exclusion = $request->input('number');
        // string型となっているので数字配列に変換
        $exclusion = json_decode($str_exclusion);

        // in_arrayは、配列にデータがあるかを調べる
        while (True) {
            // TODO: 無限ループにならないように要リファクタリング
            $rand_num = mt_rand(1, 99);

            if (!in_array($rand_num, $exclusion)) {
                return $rand_num;
            }
        }
    }
}
