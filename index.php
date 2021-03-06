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
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md">
            <a class="navbar-brand ml-3" href="#">City-State</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button">Tryb</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Singleplayer</a>
                            <a class="dropdown-item" href="#">Multiplayer</a>
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

        <div class="row none">
            <div class="col-md-4 mt-4 offset-md-5 offset-sm-4">
<!--                <h1 class="time p-1" id="time">-->
                <input type="button" id="buttonLetter" value="GOTOWY">
<!--                </h1>-->
            </div>
        </div>
        <div class="row mt-4 none">

            <div class="col-sm-8">
                <div class="game-table">
                    <div id="letter" class="ml-3"></div>
                    <div id="time" class="ml-3"></div>
                </div>

            </div>

            <div class="col-sm-4">
                <h1 class="player-list">LISTA GRACZY</h1>
            </div>
        </div>

        <div class="row">
            <input type="button" class="m-auto" id="start" value="Rozpocznij grę">
        </div>

    </div>
    <script src="./JS/script.js"></script>
    <script src="./JS/jquery-3.4.1.min.js"></script>
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
