<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div>
        <form action="{{route('posts.index')}}" method="GET">
            <button class="btn btn-primary ">Home</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>content</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{!! $post->content !!}</td>
                <td class="d-flex">
                    <form action="{{route('posts.show',$post->id)}}" method="GET">
                        <button type="submit" class="btn btn-sm btn-primary mx-2">
                            Show
                        </button>
                    </form>
                    <form action="{{route('posts.edit',$post->id)}}" method="GET">
                        <button type="submit" class="btn btn-sm btn-warning mx-2">
                            Edit 
                        </button>
                    </form>
                    <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger mx-2">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <form action="{{route('posts.create')}}">
        <button type="submit" class="btn btn-sm btn-warning">them bai viet</button>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>