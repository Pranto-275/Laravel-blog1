<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>

<body>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $items)

            <tr>
                <td>{{ $items -> id }}</td>
                <td>{{ $items -> title }}</td>
                <td>{{ $items -> details }}</td>
                <td><a href="{{ route('blog.sshow',$items->id) }}">Show</a></td>
                <td><a href="{{ route('blog.edit',$items->id) }}">Edit</a></td>
                <td><a href="{{ route('blog.delete',$items->id) }}">Delete</a></td>
            </tr>


            @endforeach


        </tbody>
    </table>
</body>

</html>
