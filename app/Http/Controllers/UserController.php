<?php

namespace SATUTeM\Http\Controllers;

use Illuminate\Http\Request;
use SATUTeM\Http\Controllers\Input;
use DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$status)
    {
        $status = DB::table('users')->where('id', $id)->update(['status' => $status]);
        return redirect('/home');
    }

    public function delete($id){

    }
}