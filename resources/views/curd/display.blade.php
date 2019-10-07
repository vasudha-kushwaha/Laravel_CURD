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
            <td>
            <button data-target="onEditModel" todo-id="{{$todo->id}}" todo-h="{{$todo->heading}}" todo-t="{{$todo->tags}}"  todo-c="{{$todo->content}}" todo-w="{{$todo->writer}}" class="btn modal-trigger onEdit-btn">Modal</button>
            </td>
            <td><a href = 'delete/{{ $todo->id }}'>Delete</a>
            </td>
        </tr>
    @endforeach
</table>


  <!-- Modal Trigger -->
  
  <!-- Modal Structure -->
  <div id="onEditModel" class="modal">
    <div class="modal-content">
      <h4>Edit Record</h4>
      <form action="{{route('user.edit')}}" method="post">
      <input type="text" name="todo-id" id="todo-data-id">
@csrf
<table>
    <tr> <td>Enter Heading</td> <td> <input type="text" name="h" id="heading" value="{{old('h')}}"></td> </tr>
    <tr> <td>Enter Tag</td> <td> <input type="text" name="t" id="tags" value="{{old('t')}}"> </td> </tr>
    <tr> <td>Enter Content</td> <td> <input type="text" name="c" id="content" value="{{old('c')}}"> </td> </tr>
    <tr> <td>Enter Writer</td> <td> <input type="text" name="w" id="writer" value="{{old('w')}}"> </td> </tr>
</table>
<input type="submit" value="Update Record">
</form>
    </div>
    <div class="modal-footer">
      <a href="" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

@endsection