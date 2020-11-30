<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('quiz.list-quizs')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quiz.add-quiz');
    }

    public function submit_result(Request $request)
    {
        $count = 0;
        $totalLength = count(Question::all());
        $answers = $request->except(('_token'));
        foreach ($answers as $key => $answer) {
            if (Answer::find((int)$answer)->is_correct == 1) {
                $count++;
            }
        }
        return view("quiz.result")->with('result', "{$count} / {$totalLength}");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = new Question;
        $question->question = $request->input('question');
        $question->save();
        $answers = array(new Answer, new Answer, new Answer, new Answer);
        for ($i = 1; $i < 5; $i++) {
            $answers[$i - 1]->question_id = $question->id;
            $answers[$i - 1]->answer = $request->input("answer{$i}");
            $answers[$i - 1]->is_correct = $request->input('correct_answer_index') == $i ? 1 : 0;
            $answers[$i - 1]->save();
        }
        return "test";
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
