<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "metro-practice";

// Create connection
$conn = new mysqli("localhost", "root", "", "metro-practise");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $station1 = $_POST['station1'];
    $station2 = $_POST['station2'];
    $distance = $_POST['distance'];

    // Insert the distance between two stations
    $sql = "INSERT INTO distances (station1_id, station2_id, distance) VALUES (?, ?, ?)";

    // Prepare and bind
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("iid", $station1, $station2, $distance);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New distance added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metro Station Distance</title>
</head>
<body>
    <form action="add_distance.php" method="post">
        <label for="station1">Select First Station:</label>
        <select name="station1" id="station1">
            <!-- Assume you dynamically populate these options from the database -->
            <option value="1">Sarthana</option>
            <option value="2">Nature Park</option>
            <option value="3">Varaccha Chopati Garden</option>
            <!-- Add more options as needed -->
        </select>
        <br>
        <label for="station2">Select Second Station:</label>
        <select name="station2" id="station2">
            <!-- Assume you dynamically populate these options from the database -->
            <option value="1">Sarthana</option>
            <option value="2">Nature Park</option>
            <option value="3">Varaccha Chopati Garden</option>
            <!-- Add more options as needed -->
        </select>
        <br>
        <label for="distance">Enter Distance:</label>
        <input type="number" name="distance" id="distance" step="0.1">
        <br>
        <button type="submit">Add Distance</button>
    </form>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<body>

<form action="time-pass.php" method="post">
    Start Station:
    <select name="start_station">
        <option value="Station A">Station A</option>
        <option value="Station B">Station B</option>
        <option value="Station C">Station C</option>
        <option value="Station D">Station D</option>
        <option value="Station E">Station E</option>
        <option value="Station F">Station F</option>
        <option value="Station G">Station G</option>
    </select>
    <br>
    End Station:
    <select name="end_station">
        <option value="Station A">Station A</option>
        <option value="Station B">Station B</option>
        <option value="Station C">Station C</option>
        <option value="Station D">Station D</option>
        <option value="Station E">Station E</option>
        <option value="Station F">Station F</option>
        <option value="Station G">Station G</option>
    </select>
    <br><br>
    <input type="submit" value="Calculate Distance">
</form>

</body>
</html> -->

