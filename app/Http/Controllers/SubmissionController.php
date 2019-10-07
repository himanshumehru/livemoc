<?php

namespace App\Http\Controllers;

use App\Submission;
use Illuminate\Http\Request;
use App\Mail\SubmissionCreated;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
      unset($request['_token']);
      $formname = $request['formname'];
      unset($request['formname']);
        if($formname == 'PCOF Post-Test'){
            unset($request['completed_pcof']);
            unset($request['have_you_used_pcof']);
            auth()->user()->completePosttest();
         }
      $attributes['answers'] = json_encode($request->all());
      $attributes['user_id'] = auth()->id();
     //Store into your table using Laravel model you've created
     $submission = Submission::create($attributes); 

     \Mail::to($submission->user->email)->send(

            new SubmissionCreated($submission, $formname)
     );

     \Mail::to(env('SUBMISSION_ADMIN_EMAIL'))->send(

            new SubmissionCreated($submission, $formname)
     );
     //check if it's the pretest. If so, mark pretest complete for this user. 

     if($formname == 'PCOF Pre-Test'){
        auth()->user()->completePretest();
     }


     return redirect('/pcof');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
