<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>
    hello, {{$name}}
   </h1> 
   <form action="" method="post">
    @csrf
    <input type="text" name="name" id="id"><br>
    <input type="submit" value="send">
    
    <select name="department" id="department">
        @foreach ($departments as $key => $department )
         <option value="{{$key }}"> {{ $department }}</option>
        @endforeach
    </select><br>
</form>
</body>
</html>