<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Ready: SMS Alerts</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/admin-sms.css">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <img src="images/icon.png">
    <div class="topcont">
      <div class="p1">Republic of the Philippines</div>
      <div class="p2">Municipality of Barugo</div>
      <div class="p3">MDRRMO</div>
    </div>
    <a href="logout.php" style="width: 100px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path>
      </svg>
      <br>Logout
    </a>

    <a href="reports-flood.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M88,112a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H96A8,8,0,0,1,88,112Zm8,40h80a8,8,0,0,0,0-16H96a8,8,0,0,0,0,16ZM232,64V184a24,24,0,0,1-24,24H32A24,24,0,0,1,8,184.11V88a8,8,0,0,1,16,0v96a8,8,0,0,0,16,0V64A16,16,0,0,1,56,48H216A16,16,0,0,1,232,64Zm-16,0H56V184a23.84,23.84,0,0,1-1.37,8H208a8,8,0,0,0,8-8Z"></path>
        </svg>
        <br>Reports
      </div>
    </a>

    <a href="admin-map.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M228.92,49.69a8,8,0,0,0-6.86-1.45L160.93,63.52,99.58,32.84a8,8,0,0,0-5.52-.6l-64,16A8,8,0,0,0,24,56V200a8,8,0,0,0,9.94,7.76l61.13-15.28,61.35,30.68A8.15,8.15,0,0,0,160,224a8,8,0,0,0,1.94-.24l64-16A8,8,0,0,0,232,200V56A8,8,0,0,0,228.92,49.69ZM104,52.94l48,24V203.06l-48-24ZM40,62.25l48-12v127.5l-48,12Zm176,131.5-48,12V78.25l48-12Z"></path>
        </svg>
        <br>Map
      </div>
    </a>

    <a href="admin-population.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <br>Population
      </div>
    </a>

    <a href="admin-about.php">About</a>
    <a href="admin-sms.php" class="active">SMS</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
  <div class="division">
    <div class="register-container">
      <h1>REGISTER MOBILE NO.</h1>

      <form action="add_contacts.php" method="POST">
      <div class="input-container">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="middleInitial" placeholder="Middle Initial">
        <input type="text" name="lastName" placeholder="Last Name">
      </div>

      <div class="input-container">
        <select name="barangay">
          <option value="">Barangay</option>
          <option value="Abango">Abango</option>
          <option value="Amahit">Amahit</option>
          <option value="Balire">Balire</option>
          <option value="Balud">Balud</option>
          <option value="Bukid">Bukid</option>
          <option value="Bulod">Bulod</option>
          <option value="Busay">Busay</option>
          <option value="Cabarasan">Cabarasan</option>
          <option value="Cabolo-an">Cabolo-an</option>
          <option value="Calingcaguing">Calingcaguin</option>
          <option value="Can-isak">Can-Isak</option>
          <option value="Canomantag">Canomantag</option>
          <option value="Cuta">Cuta</option>
          <option value="Domogdog">Domogdog</option>
          <option value="Duka">Duka</option>
          <option value="Guindaohan">Guindaohan</option>
          <option value="Hiagsam">Hiagsam</option>
          <option value="Hilaba">Hilaba</option>
          <option value="Hinugayan">Hinugayan</option>
          <option value="Ibag">Ibag</option>
          <option value="Minuhang">Minuhang</option>
          <option value="Minuswang">Minuswang</option>
          <option value="Pikas">Pikas</option>
          <option value="Pitogo">Pitogo</option>
          <option value="Poblacion Dist. I">Poblacion Dist. I</option>
          <option value="Poblacion Dist. II">Poblacion Dist. II</option>
          <option value="Poblacion Dist. III">Poblacion Dist. III</option>
          <option value="Poblacion Dist. IV">Poblacion Dist. IV</option>
          <option value="Poblacion Dist. V">Poblacion Dist. V</option>
          <option value="Poblacion Dist. VI">Poblacion Dist. VI</option>
          <option value="Pongso">Pongso</option>
          <option value="Roosevelt">Roosevelt</option>
          <option value="San Isidro">San Isidro</option>
          <option value="San Roque">San Roque</option>
          <option value="Santa Rosa">Santa Rosa</option>
          <option value="Santarin">Santarin</option>
          <option value="Tutug-an">Tutug-an</option>
        </select>
        <input type="text" name="phoneNo" placeholder="Phone No." maxlength="11">
        <button type="submit">REGISTER</button>
      </form>
      </div>
    </div>

    <div class="list-container">
      <h1>LIST OF CONTACTS</h1>

      <?php
      $servername = "localhost";
$username = "root";
$password = "";
$database = "disaster_ready";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registered_no";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
      <tr>
        <th>Name</th>
        <th>Barangay</th>
        <th>Phone</th>
      </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
          <td>" . $row["first_name"] . "<p style='display: inline'> </p>" . $row["last_name"] . "</td>
          <td>" . $row["barangay"] . "</td>
          <td>" .  $row["phone_no"] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>

    </div>
  </div>



  <div class="division">
    <div class="compose-container">
      <h1 style="width: 93.5%;">COMPOSE MESSAGE</h1>

      <div class="input-container">
        <select name="barangay">
            <option value="">Barangay</option>
            <option value="abango">Abango</option>
            <option value="amahit">Amahit</option>
            <option value="balire">Balire</option>
            <option value="balud">Balud</option>
            <option value="bukid">Bukid</option>
            <option value="bulod">Bulod</option>
            <option value="busay">Busay</option>
            <option value="cabarasan">Cabarasan</option>
            <option value="cabolo-an">Cabolo-an</option>
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
          </select>

          <button type="submit" name="compose">SEND</button>
      </div>

          <div class="input-container">
            <textarea name="compose-sms" placeholder="Enter message here..."></textarea>
          </div>
    </div>
  </div>


























</div>
<div class="footer">
  <div class="foot-txt">
  <img src="images/footer.png" style="height: 100%; width: 80%;">
  </div>

  <div class="foot-txt">
      <font style="font-weight: 700;">REPUBLIC OF THE PHILIPPINES</font>
      All content is in the public domain unless otherwise stated.
  </div>

  <div class="foot-txt">
    <font style="font-weight: 700;">ABOUT GOVPH</font>
    Learn more about the Philippine government, its structure, how government works and the people behind it.
  </div>
</div>
