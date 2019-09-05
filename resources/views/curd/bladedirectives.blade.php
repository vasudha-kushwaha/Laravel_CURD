@php
print_r($users);
@endphp
<br/>
@for($i=0;$i<6;$i++)
    {{$i}}  <br/>
@endfor

My name is : {{$name}}dha. <br/>
{{strlen($name)}} <br/>

@foreach($users as $user)
    {{$user}} <br/>
@endforeach

@forelse ($users as $user)
    <li>{{ $user }}</li>
@empty
    <p>No users</p>
@endforelse




