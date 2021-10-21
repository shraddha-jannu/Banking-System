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
  
  body, html {
   height: 100%;
  }

  * {
    box-sizing: border-box;
  }

  .bg-img {
    /* The image used */
  background-image: url("C:\xampp\htdocs\internship_project\FlexStart\assets\img\bg-t1.jpg");

  /* Control the height of the image */
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  } 
  
  .container {
  position: absolute;
  right: 12%;
  
  margin: 20px;
  max-width: 1100px;
  padding: 10px;
  background-color: white;
 }
  input[type=text]{
	  width:30%;
	  height:100%;
	  font-size:16px;
	  outline: 3px solid transparent;
	  border: none;
	  border-bottom: 2px solid blue;
  }
  
  button{
	  width:15%;
	  background-color: #800000;
	  border: none;
	  color: white;
	  padding: 16px 32px;
	  text-decoration: none;
	  margin: 4px 2px;
	  cursor: pointer;
	  border-radius:30px;
  }
  .label {
  color: green;
    font-size: 25px;
  padding: 8px;
  }
  
  .column {
  float: left;
  width: 50%;
  }

/* Clear floats after the columns */
.row:after {
	display:flex;
  }
  </style>
</head>
<body>
  
  <section id="transfer-hero" class="hero d-flex align-items-center">
	<form class="container" method="POST" action="success.php">
  <br><br><br><br><br>
  <center>
  <u><span class="label transaction">Make Transaction</span><br><br><br></u>
  <input type="text" id="sender_acc" name="sender_acc" placeholder="Sender account number"><br><br><br>
  <input type="text" id="receiver_acc" name="receiver_acc" placeholder="Receiver account number"><br><br><br>
  <input type="text" id="amount" name="amount" placeholder="Amount"><br><br><br>
  <button id="customer"><a href="view_customer.php" style="color:#ffffff">Transactions</a></button>
  <button id="tranfer">Transfer</button><br><br><br>
  </center>
  </div>
  
  </form>
  
  
  </section><!-- End Hero -->
  
  
  </body>
</html>