<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Test;

class TestController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $block_id = 1;
        $times = 20;
        return view('tests.create', 
                    ['block_id' => $block_id,
                     'times' => $times]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {

        $test = new Test;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('users/'.$user->id);
    }
}
