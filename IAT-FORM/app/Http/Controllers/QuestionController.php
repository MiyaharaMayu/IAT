<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Question;

use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
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
        foreach($request->q as $i => $answers) {
            if(is_array($answers)) {
                foreach($answers as $answer) {
                    $question = new Question;
                    $question->subject_id = $request->user()->id;
                    // 0から始まるので
                    $question->question_id = $block_id.'-'.($i + 1);
                    $question->answer = $answer;
                    if($answer == 'on') {
                        $question->answer = $request['textforscb'.($i + 1)];
                    }
                    $question->save();
                }
            } else {
                $question = new Question;
                $question->subject_id = $request->user()->id;
                // 0から始まるので
                $question->question_id = $block_id.'-'.($i + 1);
                $question->answer = $answers;
                if($answers == 'on') {
                    $question->answer = $request['textforscb'.($i + 1)];
                }
                $question->save();
            }
            
        }

        $block_id++;
        // 5回の操作が終われば
        if($block_id == 6) {
            Auth::logout();
            return redirect('/fin');
        }
        return view('questions.form'.$block_id, 
                    ['block_id' => $block_id]);
    }
}
