<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
  //to display home page
    public function index(){
      $members=Member::all();
      return view('home.index')->with('members',$members);
    }
 //to insert data into the tables
    public function insert(Request $request){
      $member=new Member;
      $member->name=$request->name;
      $member->age=$request->age;
      $member->address=$request->address;
      $member->email=$request->email;
      $member->save();
      return response()->json($member);

    }

    //to update data in the tables
    public function update(Request $request){
      $member=Member::find($response->id);
      $member->name=$request->name;
      $member->age=$request->age;
      $member->address=$request->address;
      $member->email=$request->email;
      $member->save();
      return response()->json($member);


    }
    //to delete data in the tables
    public function delete(){
        $member=Member::find($response->id);
        $member->delete();
      return response()->json();
    }


}
