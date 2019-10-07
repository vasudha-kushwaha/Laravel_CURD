@extends('layouts.masterpage')

@section('title')
myHome
@endsection

@section('content')

<div class="row" id="r1" height="500px">
    <form method="post" action="">
        <input type="file" name="upload-excel" id="upload-excel">
        <input type="submit" name="submit" value="upload excel">
    </form>
</div> 

@endsection