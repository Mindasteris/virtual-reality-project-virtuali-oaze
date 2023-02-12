<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();

        return view('comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment_name' => 'required|max:30',
            'comment_subject' => 'required|max:50',
            'comment_message' => 'required|max:255',
        ]);

        $comments = Comment::create([
            'comment_name' => $request->comment_name,
            'comment_subject' => $request->comment_subject,
            'comment_message' => $request->comment_message,
        ]);

        return redirect(route('atsiliepimai.index'))->with('success', 'Jūsų atsiliepimas sėkmingai publikuotas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        return view('comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'comment_name' => 'required|max:30',
            'comment_subject' => 'required|max:50',
            'comment_message' => 'required|max:255',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        return redirect(route('atsiliepimai.index'))->with('edit', 'Jūsų atsiliepimas sėkmingai redaguotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return redirect(route('atsiliepimai.index'))->with('delete', 'Jūsų atsiliepimas ištrintas');
    }
}
