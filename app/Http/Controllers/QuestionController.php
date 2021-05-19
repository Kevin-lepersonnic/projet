<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }

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
        $comments = $question->comments()->latest()->get();

        return view('questions.show', [
            'question' => $question,
            'comments' => $comments
        ]);
    }

    public function create()
    {
        $question = Question::all();

        return view('questions.create', [
            'question' => $question,
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3',
            'content'=>'required|min:5|max:200',

        ]);

        $question = new Question();
        $question->title = $request->input('title');
        $question->content = $request->input('content');
        $question->slug = Str::slug($question->title);
        $question->user_id = 1;
        $question->save();


        return redirect()->route('home');
    }
}