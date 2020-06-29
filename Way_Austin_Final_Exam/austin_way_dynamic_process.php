<!--
Name: Austin Way
Course: CSCI 4000
Final Exam
Due Date: May 6, 2020
Purpose: index page
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
            <h3>The following coordinates are saved to the database table:</h3>

            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <?php
                        $no_elements = count($_POST);
                        $no_elements_divided_by_two = $no_elements / 2;

                        for($i=1; $i<=($no_elements_divided_by_two); $i++) {
                            $xtext = 'xtext'.$i;
                            $ytext = 'ytext'.$i;
                            $xnumber = filter_input(INPUT_POST, $xtext);
                            $ynumber = filter_input(INPUT_POST, $ytext);
                            $numberarray[] = $i;
                            $xarray[] = $xnumber;
                            $yarray[] = $ynumber;

                            echo "x".$i."=".$xnumber.", ";
                            echo "y".$i."=".$ynumber.";";

                            echo "<br>\n";

                            //insert values to database
                            require_once('austin_way_database.php');
                            $query = 'insert into coordinate values ('.$i.','.$xnumber.','.$ynumber.')';
                            $statement = $conn->prepare($query);
                            $statement->execute();
                            $statement->closeCursor();

                        }

//                                    echo "Print x values in array";
//                                    $sum = 0;
//                                    for ($i=0;$i<count($xarray);$i++){
//                                        echo $xarray[$i]."<br>\n";
//                                        $sum = $sum + $xarray[$i];
//                                    }
//                                    echo "Sum of xarray = $sum<br\n>";
//
//                                    echo "Print y values in array";
//                                    $sum = 0;
//                                    for ($i=0;$i<count($yarray);$i++){
//                                        echo $yarray[$i]."<br>\n";
//                                        $sum = $sum + $yarray[$i];
//                                    }
//                                    echo "Sum of yarray = $sum<br\n>";






                        ?>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br />
                        <p>Click on the link below to retreive coordinates from the database table for calculation</p>
                        <a href="austin_way_calculate.php" class="pl-2">Retreive records for calculation</a>
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

