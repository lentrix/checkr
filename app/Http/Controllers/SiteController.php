<?php

namespace App\Http\Controllers;

use App\Question;
use App\Response;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        $questions = Question::where('active', 1)->get();
        return view('users.home', compact('questions'));

    }

    public function userView(Question $question) {
        return view('users.view', compact('question'));
    }

    public function storeAnswer(Request $request) {
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'response' => 'required',
            'question_id' => 'required|numeric',
        ]);

        $qid = $request['question_id'];

        $resp = Response::where('lname', $request['lname'])
            ->where('fname',$request['fname'])
            ->where('question_id', $qid)->first();

        if($resp) {
            return redirect("/user-view/$qid")->with('Info', 'You have already answered this question');
        }

        Response::create($request->all());

        return redirect("/user-view/$qid")->with('Info', 'Congratulations! You have given your answer to this question successfully!');
    }
}
