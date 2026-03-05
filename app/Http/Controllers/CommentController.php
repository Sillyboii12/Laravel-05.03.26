<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::all();
        return view('comments.index', ['comments' => $comments]);
    }

    public function create() {
        return view('comments/create');
    }

    public function store(Request $request) {
        Comment::create([
            'content' => $request["content"]
        ]);

        return redirect('/comments/list');
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();

        return redirect('/comments/list');
    }
    
    public function update($id, Request $request){
        $comment = Comment::find($id);
        $content = $request->input('content');
        $comment->update(['content' => $content]);
        return redirect('/comments/list');
    }

    public function comment($id){
        $comment = Comment::find($id);
        return view('comments/update', ["comment" => $comment]);
    }
}
