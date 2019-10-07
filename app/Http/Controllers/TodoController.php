<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todo;
use DB;
//use Excel;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function php_directives()
    {
        /* Passing values from controller to view file
          There are 4 ways to pass the values to the view.
          1-using array function.- "array"
          2-using compact function.- compact()
          3-using with.- with([])
          4-using withVariablename.- withName""
        */
        $name="Vasu";
        $users=["Sandeep","Abhishek","Unnati","Sanjay","Anita","Anjali","Sushant"];
        //$users=[];
        //return view('curd.bladedirectives', array("users"=>$users, "name"=>$name)); //using array function.

        return view('curd.bladedirectives', compact("name","users")); //using compact function.

        //return view('curd.bladedirectives')->with(["users"=>$users, "name"=>$name]); //using with.

        //return view('curd.bladedirectives')->withUsers($users)->withName($name); //using withVariablename.
    }
    public function importExportView()
    {
        return view('curd.myhome');
    }
    public function importData(Request $request)
    {
        if($request->hasFile('upload-excel'))
        {
            $path=$request->file('upload-excel')->getRealPath();
            $data=\Excel::import($path)->get();
            if($data->count())
            {
                foreach($data as $key => $value)
                {
                    $list[]=['heading'=>$value->heading, 'tags'=>$value->tags, 'content'=>$value->content, 'writer'=>$value->writer];
                }
                if(!empty($list))
                {
                    Todo::insert($list);
                    \session::flash('success', 'File imported successfully');
                }
            }
            else
            {
                \session::flash('warning', 'no file to import');
            }
        }
        return redirect::back();
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
