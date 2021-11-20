<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>

    <h1>Edit Blog</h1>
    <form action="{{ route('blog.update',$blog->id) }}" method="POST">
      @csrf
      @method('PUT')

        <input type="text" name="title" placeholder="title" value="{{ $blog->title }}"> <br> <br>
        <textarea name="details" id="" cols="30" rows="10" placeholder="details">{{ $blog->details }}</textarea> <br><br>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>



</body>

</html>
