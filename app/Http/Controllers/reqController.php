<?php

namespace etl\Http\Controllers;

use Illuminate\Http\Request;

use etl\Http\Requests;
use etl\Http\Controllers\Controller;

class reqController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        #load all requests
        $requests = \etl\request::all();

        return view('req.index')
        ->with('requests',$requests);
    }


    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        #load all users
        //$users = \etl\User::all();
        $users = \etl\User::orderBy('name','ASC')->get();

        return view('req.create')->with('users', $users);
    }


    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

        // Validate the request data
        $this->validate($request, [
            'client' => 'required',
        ]);

        # Enter into the database
        $req = new \etl\request();

        $req->start = $request->start;
        $req->client = $request->client;
        $req->department = $request->department;
        $req->user = $request->user;
        $req->purpose = $request->purpose;
        $req->server_name = $request->server_name;
        $req->host = $request->host;
        $req->port = $request->port;
        $req->code = $request->code;
        $req->dictonary = $request->dictonary;
        $req->notes = $request->notes;
        $req->status = $request->status;
        $req->end = $request->end;
        $req->save();
        \Session::flash('flash_message','The request has been submitted.');
        return redirect('/req');
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
        #load request
        $request = \etl\request::find($id);

        #load all users
        //$users = \etl\User::all();
        $users = \etl\User::orderBy('name','ASC')->get();


        return view('req.edit')
            ->with([
                'request' => $request,
                'users' => $users,
            ]);
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
        $req = \etl\request::find($request->id);

        $req->start = $request->start;
        $req->client = $request->client;
        $req->department = $request->department;
        $req->user = $request->user;
        $req->purpose = $request->purpose;
        $req->server_name = $request->server_name;
        $req->host = $request->host;
        $req->port = $request->port;
        $req->code = $request->code;
        $req->dictonary = $request->dictonary;
        $req->notes = $request->notes;
        $req->status = $request->status;
        $req->end = $request->end;
        $req->save();

        return redirect('/req');
    }


    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //
    }


    /**
    * Responds to requests to POST /books/edit
    */
    public function postEdit(Request $request) {
        $req = \etl\request::find($request->id);

        $req->start = $request->start;
        $req->client = $request->client;
        $req->department = $request->department;
        $req->user = $request->user;
        $req->purpose = $request->purpose;
        $req->server_name = $request->server_name;
        $req->host = $request->host;
        $req->port = $request->port;
        $req->code = $request->code;
        $req->dictonary = $request->dictonary;
        $req->notes = $request->notes;
        $req->status = $request->status;
        $req->end = $request->end;
        $req->save();

        \Session::flash('flash_message','Your changes were saved.');
        return redirect('/req');
    }


    /**
    * Performance reports
    */
    public function performance()
    {
        $performance = \etl\request::all();
        
        //dd($performance->lists('status','start','id'));

        return view('performance')
        ->with('start', $performance->lists('start'))
        ->with('id', $performance->lists('id'));
    }
}




