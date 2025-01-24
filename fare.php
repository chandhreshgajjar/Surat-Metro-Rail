<!DOCTYPE html>
<html>
<head>
	<?php 
		include ('connection.php');
		session_start();
		if(isset($_SESSION['user_id'])){
			$user_id = $_SESSION['user_id'];
			$user_name = $_SESSION['user_name'];
		}
	?>
	
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
  <meta name="keywords" content="" />
  <meta name="description" content="" />  
  <meta name="author" content="" />

  <title>SuratMetro</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <style>
    .cancel-btn {
    background-color: #dc3545;
    color: #fff;
    margin-right: 10px;
}

.cancel-btn:hover {
    background-color: #c82333;
}

.contact_section .form_container input[type=submit]{
	border: none;
    text-transform: uppercase;
    display: inline-block;
    padding: 15px 65px;
    background-color: #46a7f7;
    color: #ffffff;
    border-radius: 0;
    font-weight: bold;
}

.contact_section .form_container input[type=submit]:hover{
    background-color: #ffffff;
    color: #46a7f7;
	border: 2px solid #46a7f7;
}

.container, .marg{
	margin-top: 50px;
}
</style>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"> -->
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">

	<?php
		include ("header.php");
	?>
    
    <section class="slider_section ">
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Surat <br>
                      <span>
                        Metro
                      </span>
                    </h1>
                    <p>
                      The Surat Metro is an under-construction rapid transit rail system for Surat in Gujarat state of India. Two corridors with a combined length of 40.35 kilometers are under construction since 18 January 2021.[3] The project is expected to be completed by December 2027 at an estimated cost of ₹12,020.32 crore (US$1.5 billion).
                    </p>
                    <a href="contact.html">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="backg.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                     <h1>
                      Surat <br>
                      <span>
                        Metro
                      </span>
                    </h1>
                    <p>
                      The Surat Metro is an under-construction rapid transit rail system for Surat in Gujarat state of India. Two corridors with a combined length of 40.35 kilometers are under construction since 18 January 2021.[3] The project is expected to be completed by December 2027 at an estimated cost of ₹12,020.32 crore (US$1.5 billion).
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="backg.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    
                    <h1>
                      Surat <br>
                      <span>
                        Metro
                      </span>
                    </h1>
                    <p>
                      The Surat Metro is an under-construction rapid transit rail system for Surat in Gujarat state of India. Two corridors with a combined length of 40.35 kilometers are under construction since 18 January 2021.[3] The project is expected to be completed by December 2027 at an estimated cost of ₹12,020.32 crore (US$1.5 billion).
                    </p>
                    <a href="">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="backg.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
   
  </div>
  
  
  <?php
	
	// include ("connection.php");
	
	// $line1 = $_REQUEST['line1'];
	// $station1 = $_REQUEST['station1'];
	// $line2 = $_REQUEST['line2'];
	// $station2 = $_REQUEST['station2'];
	
	// echo $line1 . "<br>";
	// echo $line2 . "<br>";
	// echo $station1 . "<br>";
	// echo $station2 . "<br>";
	
	// $sql = $link->rawQuery("select position, direction from metro_station_distance where station_id='$station1' or station_id='$station2'");
	
	// if($link->count > 0){
	// 	foreach($sql as $s){
	// 		echo $s['position'] . "\n";
	// 		echo $s['direction'] . "<br />";
	// 	}
	// }
	
	/*$sql = $link->rawQuery("select SUM(distance) as dis from fare where origin_station_id between $station1 and $station2 - 1");
	
	if($link->count > 0){
		foreach($sql as $s){
			echo $s['dis'];
		}
	}

	//echo $distance;
	if($line1 === $line2){
		if($s['dis'] <= 5){
			echo "You fare is 10 Rs.";
		}
		else if($s['dis'] <= 10){
			echo "You fare is 20 Rs.";
		}
		else if($s['dis'] <= 20){
			echo "You fare is 30 Rs.";
		}
		else if($s['dis'] <= 30){
			echo "You fare is 40 Rs.";
		}
		// else if($s['dis'] <= 25){
		// 	echo "You fare is 50 Rs.";
		// }
		// else if($s['dis'] <= 30){
		// 	echo "You fare is 60 Rs.";
		// }
		else{
			echo "Your fare is 50 Rs.";
		}
	}
	else{

	}*/
	
	require_once "connection.php";
	
	$line1 = $_REQUEST['line1'];
	$station1 = $_REQUEST['station1'];
	$line2 = $_REQUEST['line2'];
	$station2 = $_REQUEST['station2'];
	
	$stationName = $link->rawQuery("select * from stations join track on track.line_id = stations.line_id where station_id='$station1' or station_id='$station2'");
	
	$stationNames = array();
	
	if($link->count > 0){
		foreach($stationName as $sN){
			$stationNames[] = $sN['station_name'];
		}
	}
	
	
	/*echo "From: " . $stationNames[0] . "<br />";
	echo "To: " . $stationNames[1] . "<br />";*/
	
	?>
	<section class="contact_section layout_padding-bottom">
    <div class="container marg">
      <div class="heading_container">
        <h2>
          Booking Details
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form method="POST" action="booking.php">
              <div>
				<label>From:</label>
                <input type="text" name="station1" value="<?php echo $stationNames[0]?>"/>
              </div>
              <div>
				<label>To:</label>
                <input type="text" name="station2" value="<?php echo $stationNames[1]?>"/>
              </div>
<?php	
/*$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";*/

// Create connection
$conn = new mysqli("localhost", "root", "", "metro");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $line1_id = intval($_POST['line1']);
    $line2_id = intval($_POST['line2']);
    $station1_id = intval($_POST['station1']);
    $station2_id = intval($_POST['station2']);

    // Check if the stations belong to the same line
    if ($line1_id == $line2_id) {
        // Fetch the distances within the same line
        $sql = "SELECT SUM(distance_from_pre) as total_distance FROM line_stations	 
                WHERE line_id = ? AND 
                      ((station_id <= ? AND station_id >= ?) OR 
                       (station_id >= ? AND station_id <= ?))";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiiii", $line1_id, $station1_id, $station2_id, $station1_id, $station2_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            $total_distance = $row['total_distance'];
            //echo "The total distance between the selected stations is: " . $total_distance . " km";
			?>
			<div>
				<label>Journey Distance: </label>
				<input type="text" name="distance" value="<?php echo $total_distance?>"/>
			</div>
<?php
        } else {
            echo "No distance data available for the selected stations.";
        }
    } else {
        // Calculate distance for different lines via interchange (Majura Gate)
        $interchange_station_id = 9; // Assuming Majura Gate has station_id 13

        // Fetch distance from station1 to interchange
        $sql1 = "SELECT SUM(distance_from_pre) as distance_to_interchange FROM line_stations 
                 WHERE line_id = ? AND 
                       ((station_id <= ? AND station_id >= ?) OR 
                        (station_id >= ? AND station_id <= ?))";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("iiiii", $line1_id, $station1_id, $interchange_station_id, $station1_id, $interchange_station_id);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $row1 = $result1->fetch_assoc();
        $distance_to_interchange = $row1['distance_to_interchange'];

        // Fetch distance from interchange to station2
        $sql2 = "SELECT SUM(distance_from_pre) as distance_from_interchange FROM line_stations 
                 WHERE line_id = ? AND 
                       ((station_id <= ? AND station_id >= ?) OR 
                        (station_id >= ? AND station_id <= ?))";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("iiiii", $line2_id, $interchange_station_id, $station2_id, $interchange_station_id, $station2_id);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $row2 = $result2->fetch_assoc();
        $distance_from_interchange = $row2['distance_from_interchange'];

        // Calculate total distance
        $total_distance = $distance_to_interchange + $distance_from_interchange;
        //echo "The total distance between the selected stations is: " . $total_distance . " km";
		?>
		<div>
			<label>Journey Distance: </label>
			<input type="text" name="distance" value="<?php echo $total_distance?>"/>
		</div>
    <?php
	}
		
		$fare = 0;
	
		if($total_distance <= 5){
			//echo "You fare is 10 Rs.";
			$fare = 10;
		}
		else if($total_distance <= 10){
			//echo "You fare is 20 Rs.";
			$fare = 20;
		}
		else if($total_distance <= 20){
			//echo "You fare is 30 Rs.";
			$fare = 30;
		}
		else if($total_distance <= 30){
			//echo "You fare is 40 Rs.";
			$fare = 40;
		}
		else{
			//echo "Your fare is 50 Rs.";
			$fare = 50;
		}
		
	?>
			<div>
			  <label>Fare: </label>
              <input type="text" name="fare" value="<?php echo $fare?>"/>
            </div>
			<div class="booking">
				<input type="submit" class="book-btn" value="Book Now">
			</div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="CONTACT.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
    //$stmt->close();
}

//$conn->close();
	
?>
  
  
  <section class="treatment_section layout_padding">
   
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          OUR <span>SERVICES</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="book.jpg" alt="">
            </div>
            <div class="detail-box">
              <h4>
                TICKET BOOKING
              </h4>
              <p>
                This section allows users to book metro tickets by selecting their departure and destination stations, along with the preferred date and time.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="route1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                ROUTE
              </h4>
              <p>
                This section provides information about the metro routes available in Surat, including the various stations covered by each route.
              </p>
              <a href="https://www.google.com/maps/d/u/0/viewer?mid=1BCCMgRACRXdcns48TtvrIiCHP8P0qrQM&hl=en_US&ll=21.173360912313676%2C72.83473474999997&z=12">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="station.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                STATION INFO
              </h4>
              <p>
                This section offers detailed information about individual metro stations in Surat, including their locations, facilities, and services.
              </p>
              <a href="https://themetrorailguy.com/surat-metro-information-route-maps-fares-tenders-updates/">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="more.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
               More
              </h4>
              <p>
                This section offers additional resources and information related to the SuratMetro project, such as FAQs, updates, and external links.
              </p>
              <a href="https://themetrorailguy.com/surat-metro-information-route-maps-fares-tenders-updates/">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="">Surat Metro Department</a>
      </p>
    </div>
  </footer>
 

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> -->
  <!-- custom js -->
  <!-- <script src="js/custom.js"></script> -->

</body>

</html>