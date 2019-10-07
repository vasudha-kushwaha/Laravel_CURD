@extends('layouts.masterpage') 

 @section('title')
Curd
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h3>Registration form</h3>
<form action="{{route('curd.in')}}" method="post">
@csrf
<table>
    <tr> <td>Enter Heading</td> <td> <input type="text" class="form-control @error('h') is-invalid @enderror" name="h" id="h" value="{{ old('h') }}"> 
    @error('h')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span> 
    @enderror
    </td> </tr>
    <tr> <td>Enter Tag</td> <td> <input type="text" class="form-control @error('t') is-invalid @enderror" name="t" value="{{ old('t') }}">
    @error('t')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span> 
    @enderror
     </td> </tr>
    <tr> <td>Enter Content</td> <td> <input type="text" name="c" value="{{ old('c') }}"> </td> </tr>
    <tr> <td>Enter Writer</td> <td> <input type="text" name="w" value="{{ old('w') }}"> </td> </tr>
    <tr> <td><input type="submit" value="Save Record" ></td> <td> <label for="submit"></label> </td> </tr>
</table>
</form>

@endsection