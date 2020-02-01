<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">
    <link href="jumbotron.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <a class="navbar-brand ml-3" href="#">City-State</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown ml-5">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Poziom trudności</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">ŁATWY</a>
                            <a class="dropdown-item" href="#">ŚREDNI</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">TRUDNY</a>
                            <a class="dropdown-item" href="#">OKURWA</a>
                        </div>
                    </li>

                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#">Zasady Gry</a>
                    </li>

                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#">Autorzy</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 mt-4 offset-md-3">
                <h1 class="time">Twój czas: 90s</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 mt-2">
                <h1 class="letter">Wylosowana litera: K</h1>
            </div>
        </div>

        <div class="row mt-2">

            <div class="col-sm-8">
                <h1 class="game-table">TABELA</h1>
            </div>

            <div class="col-sm-4">
                <h1 class="player-list">LISTA GRACZY</h1>
            </div>
        </div>

    </div>
    <script src="./JS/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
