<?php
/*
Name: Austin Way
Course: CSCI 4000
Final Exam
Due Date: May 6, 2020
Purpose: index page
*/

require_once('austin_way_database.php');

?>

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
            <h3>Choose value n (1 to 20) to enter coordinates</h3>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <p>Value N: </p>
                            <form method="post" action="austin_way_dynamic_textbox.php">
                                <select name="selectNumber">
                                    <?php
                                    for ($i = 1; $i <= 20; $i++) {
                                        ?>
                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                                <br><br>
                                <input class="btn btn-success mt-2" name="indexSubmit" type="submit" value="Submit">
                            </form>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="mt-2">OR click the link below to clean up the database table</p>
                        <a href="austin_way_clear_table.php" class="pl-2">Remove old records</a>
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

