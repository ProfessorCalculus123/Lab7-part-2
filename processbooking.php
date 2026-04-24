<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1> Booking Confirmation</h1>


<?php
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];


    $tour4 = isset($_POST["4day"]) ? "the Four-Day Tour" : "";
    $tour10 = isset($_POST["10day"]) ? "the Ten-Day Tour" : "";

    echo "<p>Welcome $fname $lname!</p>";


    $conjunction = ($tour4 && $tour10) ? " and " : "";

    echo "<p>You are now booked on $tour4 $conjunction $tour10.</p>";
if (isset($_POST["M"])) {
        $species = "Human";
    } elseif (isset($_POST["D"])) {
        $species = "Dwarf";
    } elseif (isset($_POST["E"])) {
        $species = "Elf";
    } elseif (isset($_POST["H"])) {
        $species = "Hobbit";
    } else {
        $species = "Unknown"; // Safe fallback
    }

    echo "<p>Species: $species.</p>";

    ?>
</body>

</html>
