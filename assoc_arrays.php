<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Associative Arrays</title>
    </head>
    <body>
        <?php
            $assoc = array("first_name" => "Kevin", "last_name" => "Skoglund");
        ?>
        <br />
        <?php
            echo $assoc["first_name"];
        ?>
        <br />
        <?php
            echo $assoc["first_name"] . " " . $assoc["last_name"];
        ?>
        <br />
        <?php
            $assoc["first_name"] = "Larry";
        ?>
        <br />
        <?php
            echo $assoc["first_name"] . " " . $assoc["last_name"];
        ?>
        <br />
        <?php
            //echo $assoc[0]; doesn't work because 0 is not key
        ?>
        <br />
        <?php
            $numbers = array(4,8,15,16,23,42);
        ?>
        <br />
        <?php
            //this is the same as the previous variable just written out as an associative array
            $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42,);
        ?>
        <br />
        <?php
            //now 0 works as key
            echo $numbers[0];
        ?>
        <br />
        <?php
            //valid to change key numbers to whatever we like
            $numbers = array(10 => 4, 12 => 8, 20 => 15, 13 => 16, 4 => 23, 25 => 42,);
        ?>
        <br />
    </body>
</html>