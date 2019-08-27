@extends('layouts.masterpage')

@section('title')
Edit Records
@endsection

@section('content')
<div class="row" id="r1">
        <div class="col l12 m12">

        <h3>Editing form</h3>
                <form action="/edit/<?php echo $todos[0]->id; ?>" method="post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                @csrf
                <table>
                        <tr> 
                                <td>Id</td>
                                <td> <input type="text" name="id" value='<?php echo $todos[0]->id; ?>' readonly > </td>
                        </tr>
                        <tr> 
                                <td>Enter Heading</td>
                                <td> <input type="text" name="heading" value='<?php echo $todos[0]->heading; ?>' > </td>
                        </tr>
                        <tr>
                                <td>Enter Tag</td> 
                                <td> <input type="text" name="tags" value='<?php echo $todos[0]->tags; ?>'> </td>
                        </tr>
                        <tr> 
                                <td>Enter Content</td>
                                <td> <input type="text" name="content" value='<?php echo $todos[0]->content; ?>'> </td>
                        </tr>
                        <tr> 
                                <td>Enter Writer</td> 
                                <td> <input type="text" name="writer" value='<?php echo $todos[0]->writer; ?>'> </td>
                        </tr>
                        <tr> 
                                <td><input type="submit" value="Update Record" ></td>
                                <td> <label for="submit"></label> </td> 
                        </tr>
                </table>
                </form>
        </div>
</div>
@endsection