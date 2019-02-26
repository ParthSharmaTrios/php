<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>List of all Posts</h2>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Descripton</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $singlePost)
            <tr>
                <td>{{$singlePost->id}}</td>
                <td><a href="/post?id={{$singlePost->id}}">{{$singlePost->title}}</a></td>
                <td>{{$singlePost->description }}</td>
                <td><a href="/post/{{$singlePost->id}}" class="btn btn-danger">Delete</a></td>
            </tr>

        @endforeach

        </tbody>
    </table>

</div>

</body>
</html>
