<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RamdomNumberController extends Controller
{
    public function index()
    {
        $nums = range(1,99);
        return mt_rand(1,99);
    }
}
