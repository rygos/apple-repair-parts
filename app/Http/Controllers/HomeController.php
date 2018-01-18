<?php

namespace App\Http\Controllers;

use App\Models\Model;
use App\Models\Repair;
use App\Models\Spare;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stats['models'] = Model::count();
        $stats['repairs'] = Repair::count();
        $stats['spares'] = Spare::count();

        return view('home', [
            'stats' => $stats,
        ]);
    }
}
