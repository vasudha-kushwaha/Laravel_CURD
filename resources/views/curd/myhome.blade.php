@extends('layouts.masterpage')

@section('title')
myHome
@endsection

@section('content')
<div class="row" id="r1">
        <div class="col l6 m6">
        <b>
        <p style="font-size:300%;">We ensure your <br>
        <font color="#ef5350">future harvest</font></p>
        </b>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam modi molestiae ex, laboriosam minima amet? Corporis maxime quasi minus tempore sunt exercitationem necessitatibus, provident, voluptates, corrupti ducimus magnam voluptas totam.
        <br><br>
        <input type="button" class="btn green" value="Discover Products" style="border-radius: 20px;">
        <br><br><br><br>
        </div>
        <div class="col l6 m6 s12">
        <br><br>
        <form method="post" action="{{ route('import.data') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="upload-excel" id="upload-excel">
        <input type="submit" name="submit" value="upload excel">
        <br><br>
        <a class="btn green" style="border-radius: 20px;" href="{{ route('export') }}">Export User Data</a>
    </form>

        </div>
</div> 
@endsection