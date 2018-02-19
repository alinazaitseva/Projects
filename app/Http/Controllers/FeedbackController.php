<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\User;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function feedback($id){
        $feedback = new Feedback::all()->save();
        $feedback->id_messages= $id;
       
        return view('feedback.create',compact('feedback'));
    }

    public function feedstore(Request $request, $id){
        $this->validate($request, ['feedback' => 'required',]);
        $feedstore = new Feedback($request->all());
        $feedstore->id_messages = $id;
        $feedstore->save();
        return redirect()->action('FeedbackController@index')
            ->with('success', 'Feedback created');
    }

    public function index(Request $request)
    {
        $feedback = Feedback::orderBy('id')->paginate(5);
        return view('feedback.index',compact('feedback'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feedback::find($id)->delete();
        return redirect()->route('feedback.index')
            ->with('success','Message deleted successfully');
    }
}
