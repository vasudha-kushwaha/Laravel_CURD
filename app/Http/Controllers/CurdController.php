<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;
use DB;

class CurdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function validator()
    {
        
    }
    public function curd()
    {
        return view('curd.curd');
    }
    public function in(Request $request)
    {
        //using tinker command -------------
        // $heading=$request->input('h');
        // $tags=$request->input('t');
        // $content=$request->input('c');
        // $writer=$request->input('w');
        // $data=array('heading'=>$heading,"tags"=>$tags,"content"=>$content,"writer"=>$writer);
        // DB::table('todos')->insert($data);
        
        //using save() method ----------------
        // $todo=new Todo;
        // $todo->heading=$request->input('h');
        // $todo->tags=$request->input('t');
        // $todo->content=$request->input('c');
        // $todo->writer=$request->input('w');
        // $todo->save();

        //using constructor of Model class ----------------
        // $todo=new Todo([
        //     "heading" => $request->input('h'),
        //     "tags" => $request->input('t'),
        //     "content" => $request->input('c'),
        //     "writer" => $request->input('w')
        // ]);
        // $todo->save();

        //using create function ----------------
        $todo=Todo::create([
            "heading" => $request->input('h'),
            "tags" => $request->input('t'),
            "content" => $request->input('c'),
            "writer" => $request->input('w')
        ]);
        $todo->save();

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/view_records">Click Here</a> to go back.';
    }
    public function disp()
    {
        $todos = DB::select('select * from todos');
        return view('curd.display', ['todos'=>$todos]);
    }
    public function show($id)
    {
        $myId=$id;
        $todos = DB::select('select * from todos where id = ?', [$id]);
        //return view('curd.curd', compact("myId", "todos"));
        //return view('curd.curd')->with(["todos"=>$todos, "id"=>$myId]);
        return view('curd.update', ["todos"=>$todos]);

    }
    public function edit(Request $request, $id)
    {
        $heading=$request->input('h1');
        $tags=$request->input('t1'); 
        $content=$request->input('c1');
        $writer=$request->input('w1');
        DB::update(' update todos set heading=?, tags=?, content=?, writer=? where id=?', [$heading, $tags, $content, $writer,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/view_records">Click Here</a> to go back.';
    }
    public function destroy($id)
    {
        $todos = DB::select('delete from todos where id = ?', [$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/view_records">Click Here</a> to go back.';
    }

}
