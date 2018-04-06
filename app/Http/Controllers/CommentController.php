<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return Comments::collection($comments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestC
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = $request->isMethod('put') ? Comment::findOrFail($request->comment_id) : new Comment;


        $comment->id = $request->input('comment_id');
        $comment->user_id = $request->input('user_id');
        $comment->text = $request->input('text');

        if($comment->save()) {
            return new Comments($comment);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return new Comments($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if($comment->delete()){
            return new Comments($comment);
        }

    }
}
