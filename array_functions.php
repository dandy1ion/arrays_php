<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Array Functions</title>
    </head>
    <body>
        <?php
            $numbers = array(8,23,15,42,16,4);
        ?>
        <br />
        Count:
        <?php
            echo count($numbers);
        ?>
        <br />
        Max value:
        <?php
            echo max($numbers);
        ?>
        <br />
        Min value:
        <?php
            echo min($numbers);
        ?>
        <br />
        <pre>
        Sort:
        <?php
            //sort changes in place, it is a destructive function (old version no longer exists)
            sort($numbers);
            print_r($numbers);
        ?>
        <br />
        Reverse sort:
        <?php
            //rsort changes in place, it is a destructive function (old version no longer exists)
            rsort($numbers);
            print_r($numbers);
        ?>
        <br />
        </pre>
        Implode:
        <?php
            //turn array into a string
            echo $num_string = implode(" * ", $numbers);
        ?>
        <br />
        Explode:
        <?php
            //turn a string into an array
            print_r(explode(" * ", $num_string));
        ?>
        <br />
        15 in array?:
        <?php
            //find if value in an array
            echo in_array(15, $numbers);//returns T/F
        ?>
        <br />
        19 in array?:
        <?php
            //find if value in an array
            echo in_array(19, $numbers);//returns T/F
        ?>
        <br />
    </body>
</html>