<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Voters</title>
</head>
<body>
<h1><center>Query Database</center></h1>
    <table border="1">
    @foreach ($voter as $vote)
        <tr>  
            <td>{{$vote->id}}</td>
            <td>{{$vote->name}}</td>
            <td>{{$vote->email}}</td>
            <td>{{$vote->address}}</td>
        </tr>
     @endforeach
    </table>
</body>
</html>