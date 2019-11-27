<!doctype html>
<html lang="en">

<head>
    <title>Buzz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="first-row d-flex m-2 justify-content-center align-items-center">
            <div class="col-2">
                <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUoOwQ0SnSVqrakbM5xqYcoD10px2o9AqFaAAUWRTwBMrgghv0&s" style="width: 50px; height: 50px;">BUZZ

            </div>
            <div class="col-8">
                <input type="text" class="search-input form-control" placeholder="Search..." value="">

            </div>
            <div class="col-2 mt-4">
                <ul class="list-unstyled d-flex ">
                    <li class="mx-2">
                        <a class="text-dark" href="">LOGIN</a>
                    </li>
                    <li class="mx-2">
                        <a class="text-dark" href="">SIGN IN</a>
                    </li>

                </ul>
            </div>
        </div>
        <hr>
        <div class="second-row flex-row mx-4">
            <div class="col-12 ">

                <div class="d-flex">
                    <div class=" large mr-4">
                        <img class=" rounded-circle" src="http://d2lllwtzebgpl1.cloudfront.net/d5db9edf31836704f148a4adcafc778a_file.jpeg" style="width:100px;height:100px">
                    </div>

                    <div class=" d-flex large mb-4 flex-column">

                        <div>
                            <h2>Thuận Đặng</h2>
                            <p class="text-secondary">@thuannn</p>
                        </div>
                        <div>
                            <div class=" flex-row d-flex">
                                <div class="mr-2 flex-column">
                                    <span class="text-dark">0</span>
                                    <span class="field text-secondary">FOLLOWERS</span>
                                </div>
                                <div class="mx-2 flex-column">
                                    <span class="text-dark">11</span>
                                    <span class="field text-secondary">FOLLOWING</span>
                                </div>
                                <div class="ml-2 flex-column">
                                    <div class="flex-column ">
                                        <span class="text-dark">0</span>
                                        <span class="field text-secondary">REVIEWS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary mt-2">Da Nang,Viet Nam</p>





                    </div>

                </div>

            </div>




        </div>
        <div class="three-row mx-4">
            <div class="d-flex">
                <div class="col-6 ">
                    <button class="btn btn-lg btn-block text-white btn-dark" onclick="taikhoan()">Tài Khoản</button>
                </div>
                <div class="col-6">
                    <button class="btn btn-lg btn-block text-dark btn-outline-secondary" onclick="sanpham()">Bài viết</button>
                </div>
            </div>

        </div>

        <div id="sanpham" class="four-row m-3 d-flex">
            <div class="col-4">
                <div class="card">
                    <img src="http://d2lllwtzebgpl1.cloudfront.net/4dd7c0209e20cf15530cb109197a842f_listingImg_Nfz0B1SHnG.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Off-White X Nike The Ten: Air Vapormax
                        </p>
                        <p>US 10.5 </p>
                        <p>$585</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="http://d2lllwtzebgpl1.cloudfront.net/7aa40f673445ea074039f858800ae158_listingImg_Nfz0B1SHnG.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Supreme Smoke Tee
                        </p>
                        <p>M </p>
                        <p>$85</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="http://d2lllwtzebgpl1.cloudfront.net/3798392f608ef48187642c13e0f2c92f_listingImg_Nfz0B1SHnG.jpg" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">Supreme Realtree Camo Backpack
                        </p>

                        <p>$185</p>
                    </div>
                </div>
            </div>



        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function sanpham() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("sanpham").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "buzz/sanpham.blade.php", true);
            xhttp.send();
        }

        function taikhoan() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("sanpham").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "buzz/taikhoan.blade.php", true);
            xhttp.send();
        }
    </script>
</body>

</html>