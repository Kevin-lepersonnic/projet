<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions=Question::with('user')->latest()->paginate(10);

        return view('questions.index', [
            'questions' => $questions
        ]);
    }

    public function show(string $slug)
    {
        $question = Question::where('slug', $slug)->firstOrFail();

        return view('questions.show', [
            'question' => $question,
        ]);
    }

    public function create()
    {
        return view('questions.create', [
            'question' => $question,
        ]);
    }
}