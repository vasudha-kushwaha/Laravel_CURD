<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <title>Document</title>
</head>
<body>
<h3>Inline Editing</h3>
<table border=1>
<thead>
    <tr>
        <td>Id</td>
        <td>Heading</td>
        <td>Tags</td>
        <td>Content</td>
        <td>Writer</td>
    </tr>
   </thead>
   <tbody id="todo-data">
   @foreach($todos as $todo)
        <tr>
            <td data-pk="{{$todo->id}}" class="id" name="id" id="id" data-title="{{ $todo->id }}">{{ $todo->id }}</td>
            <td data-pk="{{$todo->id}}" class="heading" name="heading" id="heading" data-title="{{ $todo->heading }}">{{ $todo->heading }}</td>
            <td data-pk="{{$todo->id}}" class="tag" name="tag" id="tag" data-title="{{ $todo->tags }}">{{ $todo->tags }}</td>
            <td data-pk="{{$todo->id}}" class="content" name="content" id="content" data-title="{{ $todo->content }}">{{ $todo->content }}</td>
            <td data-pk="{{$todo->id}}" class="writer" name="writer" id="writer" data-title="{{ $todo->writer }}">{{ $todo->writer }}</td>
        </tr>
    @endforeach
   </tbody>
</table>
</body>
</html>
<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $.ajaxSetup({
        type:'POST',
        headers:
        {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
        });
        $.fn.editable.defaults.mode = 'inline';

        $('.heading').editable({
        name: 'heading',
        url: '/updateproduct',
            validate: function (value)
            {
                if($.trim(value)=='')
                {
                    return 'this field is required';
                }
            }
        });

        $('.tag').editable({
        name: 'tag',
        url: '/updateproduct',
            validate: function (value)
            {
                if($.trim(value)=='')
                {
                    return 'this field is required';
                }
            }
        });

        $('.content').editable({
        name: 'content',
        url: '/updateproduct',
            validate: function (value)
            {
                if($.trim(value)=='')
                {
                    return 'this field is required';
                }
            }
        });

        $('.writer').editable({
        name: 'writer',
        url: '/updateproduct',
            validate: function (value)
            {
                if($.trim(value)=='')
                {
                    return 'this field is required';
                }
            }
        });

    });
</script>