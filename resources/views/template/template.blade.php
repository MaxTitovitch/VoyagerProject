<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="{{ 'storage/' . setting('site.logo') }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/template-style.css?q=w">
    <title>
        @section('title')
        @show
        @section('title-no-main')
            -
        @show
        {{ setting('site.title') }}
    </title>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1">
                    <a href="/">
                        <img class="logo-image" src="img/logo.png" alt title>
                    </a>
                </div>
                <div class="col-11">
                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" style="right: 0px;">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                @section('header')
                                    {{ menu('MainMenu') }}
                                @show
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>
        @section('content')
        @show
    </main>
    <footer>
        @section('footer')
            <div class="footer container-fluid">
                <div class="row footer-info">
                    <div class="col-12 footer-into-text">
                        <div class="textwidget">
                            RICHMOND HILL COUNTRY CLUB<br><br>
                            8905 Bathurst Street<br>
                            Richmond Hill, ON<br>
                            L4C 0H4<br>
                            <br>
                            <span class="glyphicon glyphicon-earphone icon-circle" aria-hidden="true"></span> (905) 731-2800<br><br>
                            <div>
                                <p>For general inquiries, please contact Reception at extension 335<br></p>
                            </div>
                            <a class="blue-link" href="http://www.richmondhillcountryclub.com/wp-content/uploads/2017/04/rhcc-accessibility-policy-a.o.d.a..pdf">ACCESSIBILITY POLICY</a>
                        </div>
                    </div>
                </div>
                <div class="row footer-copyright">
                    <div class="col-12">
                        <small>
                            <span>© 2020 Richmond Hill Country Club</span>
                        </small>
                    </div>
                </div>
            </div>
        @show
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/template-script.js?q=1"></script>
</body>
</html>
