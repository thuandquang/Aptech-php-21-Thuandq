<!doctype html>
<html lang="en">

<head>
    <title>HOME</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex mt-4">
        <form action="http://localhost/Aptech-php-21-Thuandq/PHP/05-20191021/USERDEMO/usersdemo.php" method="GET">
            <button class="btn btn-primary ">Home</button>
        </form>
        <div class="col-10 mx-4 d-flex justify-content-center">
            <h1>LARAVEL CRUD USERS DEMO</h1>
        </div>


    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="badge badge-success text-white">INDEX PAGE</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">

                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="text-center">
                            <th></th>
                            <td></td>
                            <th></th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <span class="text-muted">LARAVEL CRUD USERS DEMO</span>
                <form action="./create.php" method="GET">
                    <button class="btn btn-info ">CREATE AN USER</button>
                </form>

            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>