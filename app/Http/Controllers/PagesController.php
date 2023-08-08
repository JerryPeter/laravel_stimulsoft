<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    } 

    public function dashboard()
    {
        return view('pages.dashboard');
    }    

    public function report()
    {
        return view('pages.report');
    }    

    public function viewer()
    {
        $rpt = request()->query('rpt');
        $caption = request()->query('caption');

        $data = [
            "rpt" => request()->query('rpt'),
            "caption" => request()->query('caption'),
        ];
        // return view('pages.viewer', ['rpt' => $rpt ]);
        
        return view('pages.viewer', compact('data'));
    }

    public function designer()
    {
        return view('designer');
        //return view('pages.designer');
        //return view('layouts.designer');
    }    

    public function sample()
    {
        return view('pages.sample');
    }    


}
