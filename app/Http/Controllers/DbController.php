<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function inserts(Request $request){
       $name = $request->input('name');

        DB::insert("insert into tests (name) values(?)",[$name]);

        return "data successfully inserted <a href='/'>Main Page</a>";
    }


    public function edit($id){
        $editid = $id;
 
         $editdata = DB::select("select * from tests where id=?",[$editid]);
 
         return view('update',['datass' => $editdata]);
     }


     public function updates(Request $request,$id){
        $editid = $id;
 
         DB::update("update tests set name=? where id=?",[$request->input('name'),$editid]);
 
         return redirect('/');
     }

     public function delete($id){
        $editid = $id;
 
         DB::update("delete from  tests where id=?",[$editid]);
 
         return redirect('/');
     }


}
