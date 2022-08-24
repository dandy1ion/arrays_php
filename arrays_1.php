<!DOCTYPE html>

<html lang="en">
    <head>
    <title>Arrays</title>
    </head>
    <body>
        Part 1:
        <br />
        <?php
            $weather = array(rain, sunshine, clouds, hail, sleet, snow, wind);
            //Select out weather conditions from array to output statement
            echo "We've seen all kinds of weather this month. At the beginning of the month, we had {$weather[5]} and {$weather[6]}. Then came {$weather[1]} with a few {$weather[2]} and some {$weather[0]}. At least we didn't get any {$weather[3]} or {$weather[4]}.";
        ?>
        <br />
        <br />
        Part 2:
        <br />
        <?php
            $world = array("Japan" => "Tokyo", "Mexico" => "Mexico City", "USA" => "New York City", "India" => "Mumbai", "South Korea" => "Seoul", "China" => "Shanghai", "Nigeria" => "Lagos", "Argentina" => "Buenos Aires", "Egypt" => "Cairo", "England" => "London");
            //Sort array in place in ascending order with keys correlated with the values they are associated with. 
            asort($world);
            //Output the index/value pairs so that each pair is displayed on its own line in the format CITY, COUNTRY
            foreach($world as $country => $city) {
                echo nl2br("$city, $country \n");
            }
        ?>
        <br />
    </body>
</html>