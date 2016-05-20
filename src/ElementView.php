<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Periodically Working: a Chemistry Helper</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/elev.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>
                    Periodically Working <small>Interactive Periodic Table</small>
                </h1>
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="index.php">Periodic table</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="eqList.php">Reactions</a>
                        </li>
                        <li>
                            <a href="cmpList.php">Compounds</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-3">
            <div class="page-header">
                <h1>
                    <?php
                    $element = $_GET['eID'];

                    $elemDB = new PDO('sqlite:prototype.db');
                    $query = "SELECT name FROM ELEMENT WHERE atomic_num=" .$element;
                    $result = $elemDB->query($query);
                    $resArr = $result->fetchAll();

                    echo $resArr[0]['name'];

                    ?>
                </h1>
            </div>

        </div>
        <div class="col-md-6">
            <table class="table table-striped">
                <?php

                $element = $_GET['eID'];

                $elemDB = new PDO('sqlite:prototype.db');
                $query = "SELECT abbreviation, atomic_weight, valence_electrons FROM ELEMENT WHERE atomic_num=" .$element;
                $result = $elemDB->query($query);
                $resArr = $result->fetchAll();

                echo "<tr>";
                    echo "<th>";
                        echo "Element Abbreviation: ";
                    echo "</th>";
                    echo "<td>";
                    echo $resArr[0]['abbreviation'];
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>";
                        echo "Atomic Weight: ";
                    echo "</th>";
                    echo "<td>";
                    echo $resArr[0]['atomic_weight'];
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<th>";
                        echo "# of Valence Electrons: ";
                    echo "</th>";
                    echo "<td>";
                        echo $resArr[0]['valence_electrons'];
                    echo "</td>";
                echo "</tr>";


                echo "<tr>";
                    echo "<th>";
                        echo "Compounds: ";
                    echo "</th>";
                    echo "<td>";
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>";
                        echo "Chemical Equations: ";
                    echo "</th>";
                    echo "<td>";
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>";
                        echo "Groupings: ";
                    echo "</th>";
                    echo "<td>";
                    echo "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<th>";
                        echo "Isotopes: ";
                    echo "</th>";
                    echo "<td>";
                    echo "</td>";
                echo "</tr>";
                ?>
            </table>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>