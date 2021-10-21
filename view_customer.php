<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crypto Bank</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
		}

	td, th {
		border: 2px solid #000000;
		text-align: center;
		padding: 7px;
		}

	tr:nth-child(even) {
		background-color: #b3c6ff;
	}
	button{
		background-color:#000000;
	}
</style>
</head>
<body>
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Crypto Bank</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="view_customer.php">View Transactions</a></li>
		  <li><a class="nav-link scrollto" href="transfer_money.php">Transfer Money</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
    <!-- ======= view customer Section ======= -->
    <section id="view_customer" class="view_customer">
    </section><!-- End View customer Section -->
	</main>

  <form method="get" action="transfer_money.php"></form>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
echo "<center><b><u><h2>Customer List</h2></b></u></center><br>";
if ($result->num_rows > 0) {
  echo "<table><tr><th>Account No.</th> <th>Name</th> <th>Email</th> <th>Current balance</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    echo "<tr><td name='t1'>".$row["account_no"]."</td><td>".$row["customer_nm"]."</td><td> ".$row["email"]."</td><td> ".$row["current_balance"];
	//"</td><td><u><a href='transfer_money.php'>Transfer Money</a></u></td></tr>";
	//echo"<td><button name='transfer'><a href='transfer_money.php' style='color:#ffffff'>transfer_money</a></button></td>";
	//ss$regval=$row['account_no'];
	//$_SESSION['transfer']=$regval;
  }
  echo "</table>";
} else {
  echo "0 results";
}


$conn->close();
?>
</body>
</html>