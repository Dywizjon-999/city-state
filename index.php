<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $letter = "B";
    
    $mysqli = new mysqli("127.0.0.1", "root", "", "panstwa");
    
    $mysqli->set_charset("utf8")

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


