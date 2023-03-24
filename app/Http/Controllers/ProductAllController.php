<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductAllController extends Controller
{
    public function __invoke()
    {
        return DB::table('products')->get();
    }
}
