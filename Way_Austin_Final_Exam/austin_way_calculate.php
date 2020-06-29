<?php
require_once('austin_way_database.php');

//get all numbers
$query = "select * from coordinate";
$statement = $conn->prepare($query);
$statement->execute();
$number = $statement->fetchAll();

?>

<!--
Name: Austin Way
Course: CSCI 4000
Final Exam
Due Date: May 6, 2020
Purpose: calculate
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Austin Way’s Secret Calculator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container" id="play-container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center" id="H2">Austin Way’s Secret Calculator</h2>
            <hr id="hr">
            <h3>The following coordinates are retreived from the database table:</h3>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        foreach ($number as $n) {
                            echo 'x' . $n['number'] . ' = ' . $n['x'] . ', y' . $n['number'] . ' = ' . $n['y'] . '<br>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <br />
            <h3>The following function is applied to the coordinates:</h3>
            <h5>f(xi, yi) = (xi)<sup>2</sup> + (yi)<sup>2</sup> + 10</h5>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        foreach ($number as $n) {
                            $xsquared = $n['x'] * $n['x'];
                            $ysquared = $n['y'] * $n['y'];
                            $xplusyplusten = $xsquared + $ysquared + 10;

                            echo 'f(x'.$n['number'].', y'.$n['number'].') = (x'.$n['number'].')<sup>2</sup> + (y'.$n['number'].')<sup>2</sup> + 10 = '.$n['x'].'<sup>2</sup> + '.$n['y'].'<sup>2</sup> + 10 = '.$xplusyplusten.'<br>';
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="index.php" class="pl-2">Return to home page</a>
                    </div>
                </div>
            </div>

            <hr id="hr">
            <h6 class="text-center">&copy; 2020, Austin Way</h6>
        </div>
    </div>
</div>

</body>
</html>

