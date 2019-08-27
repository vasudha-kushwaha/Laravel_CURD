@extends('layouts.masterpage')

@section('title')
View Records
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
            <td><a href = 'edit/{{ $todo->id }}'>Edit</a></td>
            <td><a href = 'delete/{{ $todo->id }}'>Delete</a></td>
        </tr>
    @endforeach
</table>

        </div>
</div>
@endsection