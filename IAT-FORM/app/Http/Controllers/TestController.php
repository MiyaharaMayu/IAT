<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Test;

class TestController extends Controller
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
    public function create(Request $request)
    {
        $block_id = 1;
        $pattern = $request->user()->pattern;
        return view('tests.create', 
                    ['block_id' => $block_id,
                     'pattern' => $pattern]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 試行回数
        $time = $request->count;
        $subject_id = $request->user()->id;
        $block_id = $request->block_id;
        $pattern = $request->pattern;
        // 配列で渡されるが、とる時に文字列になるので、再度配列に変換
        $trials = explode(',', $request->trial[0]);
        $words = explode(',', $request->word[0]);
        $error_nums = explode(',', $request->error_num[0]);
        $reaction_times = explode(',', $request->reaction_time[0]);

        // 試行回数分保存
        for($i = 0; $i < $time; $i++) {
            $test = new Test;
            $test->subject_id = $subject_id;
            $test->block_id = $block_id;
            $test->trial = $trials[$i];
            $test->word = $words[$i];
            $test->error_num = $error_nums[$i];
            $test->reaction_time = $reaction_times[$i];
            $test->save();
        }

        $block_id++;
        // 5回の操作が終われば
        if($block_id == 6) {
            return redirect('questions/create');
        }
        return view('tests.create', 
                    ['block_id' => $block_id,
                     'pattern' => $pattern]);
    }
}
