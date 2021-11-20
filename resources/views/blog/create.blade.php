<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Create Blog</h1>
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title"> <br> <br>
        <textarea name="details" id="" cols="30" rows="10" placeholder="details"></textarea> <br><br>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>



</body>

</html>
