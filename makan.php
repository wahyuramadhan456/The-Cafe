<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cafe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">The Cafe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Daftar Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Menu Makanan</a>
                        <a class="dropdown-item" href="#">Menu Minuman</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hubungi Kami</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <ul>
                    <li>Nasi Goreng asthetic</li>
                    <li>Nasi Padang</li>
                    <li>Nasi Lemak</li>
                    <li>Nasi Liwet</li>
                    <li>Nasi Kebuli</li>
                    <li>Nasi Kuning</li>
                    <hr>
                    <li>Mie Bajak</li>
                    <li>Mie Setan</li>
                    <li>Mie Iblis Kober</li>
                </ul>
            </div>
            <div class="col-9">
                <img src="nasi1.jpg" width="220" height="160">
                <img src="nasi2.jpeg" width="220" height="160">
                <img src="nasi3.jpg" width="220" height="160">
                <img src="nasi4.jpg" width="220" height="160">
                <img src="nasi5.jpg" width="220" height="160">
                <img src="nasi6.jpg" width="220" height="160">
                <img src="bajak.jpg" width="220" height="160">
                <img src="setan.jpg" width="220" height="160">
                <img src="kober.JPG" width="220" height="160">
            </div>
        </div>
    </div>

</body>

</html>