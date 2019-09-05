@extends('layouts.masterpage')

@section('title')
View Record
@endsection

@section('content')
<div class="row" id="r1">
        <div class="col l12 m12">
<h3>View Records</h3>

<table>
    <tr>
        <td>Heading</td>
        <td>Tags</td>
        <td>Content</td>
        <td>Writer</td>
        <td colspan=2>Actions</td>
    </tr>
    @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->heading }}</td>
            <td>{{ $todo->tags }}</td>
            <td>{{ $todo->content }}</td>
            <td>{{ $todo->writer }}</td>
            <td><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit</a></td>
            <td><a href = 'delete/{{ $todo->id }}'>Delete</a></td>
        </tr>
    @endforeach
</table>

<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Edit a record</h4>
      
      <table>
      <input type="hidden" name="hide" value='{{ $todo->id }}'>
    <tr> <td>Enter Heading</td> <td> <input type="text" name="h1" value='{{ $todo->heading }}'> </td> </tr>
    <tr> <td>Enter Tag</td> <td> <input type="text" name="t1" value='{{ $todo->tags }}'> </td> </tr>
    <tr> <td>Enter Content</td> <td> <input type="text" name="c1" value='{{ $todo->content }}'> </td> </tr>
    <tr> <td>Enter Writer</td> <td> <input type="text" name="w1" value='{{ $todo->writer }}'> </td> </tr>
    </table>

    </div>

    <div class="modal-footer">
      <a href="{{route('user.edit',$todo->id)}}" class="modal-close waves-effect waves-green btn-flat">Update</a><a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
  </div>

        </div>
</div>
@endsection