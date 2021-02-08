
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    form i.fa {
        position: absolute;
        top: 6px;
        left: 20px;
        color: blue;
        font-size: 22px;
        z-index: 9999;
      }
  
      .form-control {
        position: relative;
        padding-left: 45px !important;
  
      }
      </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/inicio">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/biografia">Biografia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/libros">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/comentar">Sugerencias</a>
            </li>
        </ul>
    </nav>
    <br>

    <div class="container">

@yield('container')

</div>

    <footer class="container bg-dark p-3 mt-1 mb-1 text-center d-flex justify-content-center">

        <div class="row">
            <div class="col">

                <a href=""><i class="fa fa-facebook fa-lg"></i></a>
                <a href=""><i class="fa fa-twitter fa-lg"></i></a>
                <a href=""><i class="fa fa-instagram fa-lg"></i></a>
                <br>
                <label for="" class="mt-1">© 2020 Copyright:</label>
                <label for=""> <a class="" href="">Toni Galmés</a></label>
            </div>

        </div>

    </footer>
</body>

</html>
