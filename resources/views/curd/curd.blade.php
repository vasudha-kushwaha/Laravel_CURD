@extends('layouts.masterpage') 

 @section('title')
Curd
@endsection

@section('content')


<h3>Registration form</h3>
<form action="{{route('curd.in')}}" method="post">
@csrf
<table>
    <tr> <td>Enter Heading</td> <td> <input type="text" name="h"> </td> </tr>
    <tr> <td>Enter Tag</td> <td> <input type="text" name="t"> </td> </tr>
    <tr> <td>Enter Content</td> <td> <input type="text" name="c"> </td> </tr>
    <tr> <td>Enter Writer</td> <td> <input type="text" name="w"> </td> </tr>
    <tr> <td><input type="submit" value="Save Record" ></td> <td> <label for="submit"></label> </td> </tr>
</table>
</form>

@endsection