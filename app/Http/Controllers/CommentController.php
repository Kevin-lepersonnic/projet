<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Question;

class CommentController extends Controller
{
    public function store(int $id, Request $request)
    {
        $request->validate([
            'pseudo' => 'required|min:3',
            'content' => 'required|min:3',
        ]);

        $question = Question::findOrFail($id);

        $comment = new Comment();
        $comment->pseudo = $request->input('pseudo');
        $comment->content = $request->input('content');
        $comment->question_id = $id;
        $comment->save();

        return redirect()->route('questions.show', ['slug' => $question->slug]);
    }
}