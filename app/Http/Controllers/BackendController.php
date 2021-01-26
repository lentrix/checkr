<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index() {
        $questions = Question::where('active',1);
        return view('backend.index', compact('questions'));
    }

    public function createQuestion(Request $request) {
        $this->validate($request, [
            'user' => 'required',
            'password' => 'required',
            'question' => 'required',
            'lifespan' => 'required|numeric'
        ]);

        if($request['user']=="lentrix" && $request['password']=="Quest") {
            Question::create($request->all());
            return redirect('/backend')->with('Info','New question has been added.');
        }else {
            return redirect('/backend')->with('Error', 'Invalid user credentials');
        }

    }

    public function viewQuestion(Question $question) {
        return view('backend.view', compact('question'));
    }

    public function deactivate(Question $question) {
        $question->active=0;
        $question->save();
        return redirect('/backend')->with('Info','A question has been deactivated.');
    }
}
