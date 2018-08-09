<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $block_id = 1;
        return view('questions.form'.$block_id,
                    ['block_id' => $block_id]);
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
        $block_id = $request->block_id;
        foreach($request->q as $i => $q) {
            $question = new Question;
            $question->subject_id = 1;
            // 0から始まるので
            $question->question_id = $block_id.'-'.($i + 1);
            $question->answer = $q;
            $question->save();
        }

        $block_id++;
        // 5回の操作が終われば
        if($block_id == 6) {
            return view('intro.intro1');
        }
        return view('questions.form'.$block_id, 
                    ['block_id' => $block_id]);
    }
}