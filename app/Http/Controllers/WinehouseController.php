<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Winehouse;

class WinehouseController extends Controller
{
    public function index()
    {
        $winehouses = Winehouse::all();
        return view('winehouses.index', compact('winehouses'));
    }
}

