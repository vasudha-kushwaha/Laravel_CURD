<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;
use DB;



class TodoController extends Controller
{
    public function home()
    {
        return view('curd.myhome');
    }
    public function about()
    {
        return view('curd.about');
    }
    public function blogs()
    {
        return view('curd.blogs');
    }
    public function authors()
    {
        return view('curd.authors');
    }
    public function adminlogin()
    {
        return view('curd.adminlogin');
    }
    public function curd()
    {
        return view('curd.curd');
    }
    // public function insert()
    // {
    //     $todo = new Todo;
    //     $todo->heading="laravel";
    //     $todo->tags="model";
    //     $todo->content="laravel is complicated";
    //     $todo->writer="vasu";
    //     $todo->save();
    // }
    public function in(Request $request)
    {
        $heading=$request->input('h');
        $tags=$request->input('t');
        $content=$request->input('c');
        $writer=$request->input('w');

        $data=array('heading'=>$heading,"tags"=>$tags,"content"=>$content,"writer"=>$writer);

        DB::table('todos')->insert($data);
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
        $todos = DB::select('select * from todos where id = ?', [$id]);
        return view('curd.update', ['todos'=>$todos]);
    }
    public function edit(Request $request, $id)
    {
        $heading=$request->input('heading');
        $tags=$request->input('tags');
        $content=$request->input('content');
        $writer=$request->input('writer');
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
