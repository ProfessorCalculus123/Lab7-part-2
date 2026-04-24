<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>

<?php
    // 1. Check for names (using ?? is a shorthand for isset() ? $_POST : default)
    $fname = $_POST["firstname"] ?? "Guest";
    $lname = $_POST["lastname"] ?? "";

    // 2. Checkboxes (already using isset, which is perfect)
    $tour4 = isset($_POST["4day"]) ? "the Four-Day Tour" : "";
    $tour10 = isset($_POST["10day"]) ? "the Ten-Day Tour" : "";

    echo "<p>Welcome $fname $lname!</p>";

    // Build the tour sentence
    $conjunction = ($tour4 && $tour10) ? " and " : "";
    if ($tour4 || $tour10) {
        echo "<p>You are now booked on $tour4$conjunction$tour10.</p>";
    } else {
        echo "<p>No tours selected.</p>";
    }

    // 3. Species Radio Logic with isset
    if (isset($_POST["species"])) {
        $species_code = $_POST["species"];
        if ($species_code == "M") {
            $species = "Human";
        } elseif ($species_code == "D") {
            $species = "Dwarf";
        } elseif ($species_code == "E") {
            $species = "Elf";
        } elseif ($species_code == "H") {
            $species = "Hobbit";
        } else {
            $species = "Unknown (Received: " . htmlspecialchars($species_code) . ")";
        }
    } else {
        $species = "Not Specified";
    }
    echo "<p>Species: $species</p>";

    // 4. Age with isset check
    $age = isset($_POST["age"]) ? $_POST["age"] : "Not provided";
    echo "<p>Age: $age</p>";

    // 5. Food Menu with isset check
    if (isset($_POST["food"])) {
        $food = $_POST["food"];
        if ($food == "none") {
            $meal_choice = "No special menu requested";
        } else {
            $meal_choice = ucfirst($food);
        }
    } else {
        $meal_choice = "None";
    }

    echo "<p><strong>Menu Preference:</strong> $meal_choice</p>";
?>

</body>
</html>