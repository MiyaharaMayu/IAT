<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // 画面に表示させるIntroのid番号
        $id = 1;
        // nextは次に出すIntroのid番号
        if($request->next) {
            $id = $request->next;
        }
        return view('intro.intro'.$id);
    }
}
