<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box Test</title>
</head>
<body>
    <h1>Check Box Test</h1>
    <form action="index.php">
        <input type="checkbox" id="car1" name="cars[]" value="Bike">
        <label for="car1"> I have a bike</label><br>
        <input type="checkbox" id="car2" name="cars[]" value="Car">
        <label for="car2"> I have a car</label><br>
        <input type="checkbox" id="car3" name="cars[]" value="Boat">
        <label for="car3"> I have a boat</label><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        echo "<h4>Get Requests</h4>";
        
        if(isset($_GET['cars'])) {

            foreach($_GET['cars'] as $key=>$value) {
        
                echo $value . "<br>";
        
            }
        
        }else{
            echo $_GET['cars'] . " has no values assigned.";
        }
    ?>
</body>
</html>