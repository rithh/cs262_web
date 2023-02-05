<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // include DB Class
use Illumniate\Support\Facades\Auth;


class PageController extends Controller
{
    //


    function home()
    {

        //$movie_db = DB::select("select * from tbl_movies");

        //Get limit
        //$movie_db = DB::table('tbl_movies')->limit(1)->get();

        //$movie_db = DB::table('tbl_movies')->get();

        $bus_db = DB::table('bus_tbl')
            ->orderBy('depart_time', 'asc')
            //->limit(10)
            ->get(); // Query SQL

        return view("home", ["tpl_bus" => $bus_db]);
        //return view('home'); //render view

    }
    function home_fastest()
    {

        //$movie_db = DB::select("select * from tbl_movies");

        //Get limit
        //$movie_db = DB::table('tbl_movies')->limit(1)->get();

        //$movie_db = DB::table('tbl_movies')->get();

        $bus_db = DB::table('bus_tbl')
            ->orderBy('time_diff', 'asc')
            //->limit(10)
            ->get(); // Query SQL

        return view("home", ["tpl_bus" => $bus_db]);
        //return view('home'); //render view

    }
    function home_cheapest()
    {

        //$movie_db = DB::select("select * from tbl_movies");

        //Get limit
        //$movie_db = DB::table('tbl_movies')->limit(1)->get();

        //$movie_db = DB::table('tbl_movies')->get();

        $bus_db = DB::table('bus_tbl')
            ->orderBy('price', 'asc')
            //->limit(10)
            ->get(); // Query SQL

        return view("home", ["tpl_bus" => $bus_db]);
        //return view('home'); //render view

    }
    function ticket_detail(Request $request)
    {
        if (\Auth::check()) {
            $bus_id = $request->id;

            $bus_db = DB::table('bus_tbl')
                ->where('id', '=', $bus_id)
                ->get();
        }
        return view("ticket_detail", ["tpl_bus" => $bus_db]);
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }
}
