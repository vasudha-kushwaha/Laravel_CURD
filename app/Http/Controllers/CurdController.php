<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;
use DB;
use Session;

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
        Validator::make($request->all(), [
            "h"=>"required",
            "t"=>"required",
            "c"=>"required",
            "w"=>"required",
        ])->validate();
        //dd($request->all());
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
            Session::flash('success',"Record inserted successfully");
            //return redirect()->back();
            return redirect()->route('curd.display');
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
    public function edit(Request $request)
    {
        $todo=new Todo;

        $id=$request->input('todo-id');
        $heading=$request->input('h');
        $tags=$request->input('t');
        $content=$request->input('c');
        $writer=$request->input('w');

        $data=$todo->find($id);
        $data->heading = $heading;
        $data->tags = $tags;
        $data->content= $content;
        $data->writer = $writer;
        $data->save();
        return redirect()->back();
        //disp();

        //print_r($data);
        //dd($request->all());
        //$todo = Todo::find($request->input('todo-id'));
       // $todo->update($request->all());
        //dd($todo);

        //return redirect()->route('curd.display');
        // DB::update(' update todos set heading=?, tags=?, content=?, writer=? where id=?', [$heading, $tags, $content, $writer,$id]);
        // echo "Record updated successfully.<br/>";
        // echo '<a href = "/view_records">Click Here</a> to go back.';
    }
    public function destroy($id)
    {
        $todos = DB::select('delete from todos where id = ?', [$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/view_records">Click Here</a> to go back.';
    }

    public function inlineEdit()
    {
        $todos = DB::select('select * from todos'); 
        return view('curd.inline', compact("todos"));

        // return view('curd.inline', ['todos'=>$todos]);
    }
    public function inlineUpdate(Request $request)
    {
        //$todo_pk = base64_encode($todo->id);  
        try
        {
            $todo_id = base64_decode($request->id);
            $data=\App\Todo::findOrFail($todo_id)->update([$request->name => $request->value]);
            dd($data);
            //return response(['success' => true, 'msg' => 'Done']);
        } 
        catch (\Illuminate\Database\QueryException $ex)
        {
            return response("Not Accepted:406 = " . $this->error_msg = $ex->errorInfo[2], 500);
        }
    }
}
