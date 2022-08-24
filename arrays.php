<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Arrays</title>
    </head>
    <body>
        <?php
            $numbers = array(4,8,15,16,23,42);
            echo $numbers[1];
        ?>
        <br />
        <?php
            $numbers = array(4,8,15,16,23,42);
            echo $numbers[0];
        ?>
        <br />
        <?php
            $mixed = array(6, "fox", "dog", array("x", "y", "z"));
        ?>
        <br />
        <?php
            echo $mixed[2];
        ?>
        <br />
        <?php
            //echo $mixed[3];
        ?>
        <br />
        <?php
            //echo $mixed;
        ?>
        <br />
        <pre>
        <?php
            echo print_r($mixed);
        ?>
        </pre>
        <br />
        <?php
            echo $mixed[3][1];
        ?>
        <br />
        <?php
            $mixed[2] = "cat";
        ?>
        <br />
        <?php
            $mixed[4] = "mouse";
        ?>
        <br />
        <?php
            $mixed[] = "horse";
        ?>
        <br />
        <pre>
        <?php
            echo print_r($mixed);
        ?>
        </pre>
        <br />
        <?php
            //PHP 5.4 added the short array syntax;
            $array = [1,2,3];
        ?>
        <br />
    </body>
</html>