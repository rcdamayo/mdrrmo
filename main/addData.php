<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <h2>Add Data to Water Level Table</h2>
    
    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Establish a database connection (same as before)
        $servername = "localhost";
        $username = "root";
        $password = ""; // No password
        $dbname = "water_level";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve data from the form
        $barangay = $_POST['barangay'];
        $year = $_POST['year'];
        $january = $_POST['january'];
        $february = $_POST['february'];
        $march = $_POST['march'];
        $april = $_POST['april'];
        // $may = $_POST['may'];
        $june = $_POST['june'];
        $july = $_POST['july'];
        $august = $_POST['august'];
        $september = $_POST['september'];
        $october = $_POST['october'];
        $november = $_POST['november'];
        $december = $_POST['december'];
        // Repeat for each month (March to December)

// Create an SQL query to insert data into the selected barangay's table
$sql = "INSERT INTO $barangay (year, january, february, march, april, june, july, august, september, october, november, december)
VALUES ('$year', '$january', '$february', '$march', '$april', '$june', '$july', '$august', '$september', '$october', '$november', '$december')";

if (mysqli_query($conn, $sql)) {
echo "Data added successfully!";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<label for="barangay">Select Barangay:</label>
<select name="barangay" required>
        <option value="abango">Abango</option>
            <option value="amahit">Amahit</option>
            <option value="balire">Balire</option>
            <option value="balud">Balud</option>
            <option value="bukid">Bukid</option>
            <option value="bulod">Bulod</option>
            <option value="busay">Busay</option>
            <option value="cabarasan">Cabarasan</option>
            <option value="cabolo_an">Cabolo-an</option>
            <option value="calingcaguing">Calingcaguin</option>
            <option value="can_isak">Can-Isak</option>
            <option value="canomantag">Canomantag</option>
            <option value="cuta">Cuta</option>
            <option value="domogdog">Domogdog</option>
            <option value="duka">Duka</option>
            <option value="guindaohan">Guindaohan</option>
            <option value="hiagsam">Hiagsam</option>
            <option value="hilaba">Hilaba</option>
            <option value="hinugayan">Hinugayan</option>
            <option value="ibag">Ibag</option>
            <option value="minuhang">Minuhang</option>
            <option value="minuswang">Minuswang</option>
            <option value="pikas">Pikas</option>
            <option value="pitogo">Pitogo</option>
            <option value="poblacion1">Poblacion Dist. I</option>
            <option value="poblacion2">Poblacion Dist. II</option>
            <option value="poblacion3">Poblacion Dist. III</option>
            <option value="poblacion4">Poblacion Dist. IV</option>
            <option value="poblacion5">Poblacion Dist. V</option>
            <option value="poblacion6">Poblacion Dist. VI</option>
            <option value="pongso">Pongso</option>
            <option value="roosevelt">Roosevelt</option>
            <option value="san_isidro">San Isidro</option>
            <option value="san_roque">San Roque</option>
            <option value="santa_rosa">Santa Rosa</option>
            <option value="santarin">Santarin</option>
            <option value="tutug_an">Tutug-an</option>
        </select><br><br>

        <label for="year">Year:</label>
        <input type="number" name="year" required><br><br>

        <label for="january">January:</label>
        <input type="number" name="january" required><br><br>

        <label for="february">February:</label>
        <input type="number" name="february" required><br><br>

        <label for="february">March:</label>
        <input type="number" name="march" required><br><br>

        <label for="february">April:</label>
        <input type="number" name="april" required><br><br>

        <!-- <label for="february">May:</label>
        <input type="number" name="may" required><br><br> -->

        <label for="february">June:</label>
        <input type="number" name="june" required><br><br>

        <label for="february">July:</label>
        <input type="number" name="july" required><br><br>

        <label for="february">August:</label>
        <input type="number" name="august" required><br><br>

        <label for="february">September:</label>
        <input type="number" name="september" required><br><br>

        <label for="february">October:</label>
        <input type="number" name="october" required><br><br>

        <label for="february">November:</label>
        <input type="number" name="november" required><br><br>

        <label for="february">December:</label>
        <input type="number" name="december" required><br><br>
        <!-- Repeat the input fields for each month (March to December) -->

        <input type="submit" value="Add Data">
    </form>
</body>
</html>