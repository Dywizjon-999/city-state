<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
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
    <?php
    $letter = "B";
    
    $mysqli = new mysqli("127.0.0.1", "root", "", "panstwa");
    
    $mysqli->set_charset("utf8");

    echo "<br>";
    
    $query = "SELECT nazwa FROM test WHERE nazwa LIKE '$letter%' ";
    if ($result = $mysqli->query($query)) {
        $cnt = array();

        while ($row = $result->fetch_row()){
            $cnt[] = $row[0];
        }
    
        echo json_encode($cnt);
    }

    $mysqli->close();
?>
</body>

</html>
