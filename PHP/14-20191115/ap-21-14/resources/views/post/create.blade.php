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
  <form action="{{route('posts.index')}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="row1 m-2">
      <h5>Title</h5>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="row2 m-2">
      <h5>Description</h5>
      <input type="text" class="form-control" name="description">
    </div>
    <form>
      <textarea name="content" id="ckeditor">

    </textarea>
      <div class="row4 m-2">
        <button type="submit" class="btn btn-danger text-uppercase ">
          them bai viet
        </button>

    </form>

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>

    <script>
      CKEDITOR.replace('ckeditor');
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>