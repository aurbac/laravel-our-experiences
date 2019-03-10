<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pictures;
use DB;

class Welcome extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        if (env('DB_HOST')=='127.0.0.1' && env('DB_DATABASE')=='homestead' && env('DB_USERNAME')=='homestead' && env('DB_PASSWORD')=='secret')
            return view('welcome', ['pictures' => FALSE]);

        try {
            DB::connection()->getPdo();
        } catch (\Exception $e) {
            return view('welcome', ['pictures' => FALSE]);
        }
        $pictures = Pictures::all()->sortByDesc("created_at");
        return view('welcome', ['pictures' => $pictures]);
    }
}
