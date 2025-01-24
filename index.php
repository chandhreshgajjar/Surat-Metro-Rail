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

.table-station{
	margin-top: 40px;
	display: flex;
	justify-content: center;
}

.heading{
	margin-top: 50px;
    text-align: center;
	text-transform: uppercase;
}

td{
	text-align: center;
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
  
   <div class="heading">
		<h2>Station Information</h2>
	</div>
  
  <div class="table-station">
	<table border="1" class="container">
		<thead>
			<tr style="text-align:center;">
				<th>Sr. No</th>
				<th>Station Name</th>
				<th>Location</th>
				<th>Line Color</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = $link->rawQuery("select * from stations join track on stations.line_id = track.line_id");

				if($link->count > 0){
					foreach($query as $q){
			?>
			<tr>
				<td><?php echo $q['station_id'];?></td>
				<td><?php echo $q['station_name'];?></td>
				<td><?php echo $q['location'];?></td>
				<td style="background-color:<?php echo $q['line_color']?>;width:100px;"></td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
  </div>
  
  <section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="fare.php" method="POST" class="space-y-4"  id="bookingForm"> <!--onsubmit="submitForm(event)"-->
                    <h4>
                        BOOK <span>TICKET</span>
                    </h4>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                             <label for="inputDoctorName">Select Line</label>
                            <select id="line" name="line1" class="form-control wide">
                                <!--  -->
                                <option value="">Select Line</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDoctorName">FROM</label>
                            <select id="station" name="station1" class="form-control wide">
                                <!--  -->
                                <option value="">From</option>
                                
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
						 <div class="input-group date">
                                <label for="inputDate">Date and Time:</label>
                                <input type="datetime-local" class="form-control" id="inputDate" name="date">

                            </div>
                            
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group col-lg-4">
                           <label for="inputDoctorName">Select Line</label>
                            <select id="line2" name="line2" class="form-control wide">
                                <!--  -->
                                <option value="">Select Line</option>
                            </select>

                        </div>

                        <div class="form-group col-lg-4">
                            <!-- <label for="inputDate">Choose Date </label> -->
                           <label for="inputDepartmentName">To</label>
                            <select id="station2" name="station2" class="form-control wide">
                                <!--  -->
                                <option value="">To</option>
                                
                            </select>
                        </div>
                    </div>
					<input type="hidden" id="user_name" value="<?php echo $user_name;?>">
                    <div class="btn-box">
                        <button type="submit" class="btn" name="submit">check Now</button>
                        <button type="button" class="btn cancel-btn" onclick="cancelBooking()">Cancel Booking</button>
                        <!--  -->
                    </div>
                </form>
                <!--<div id="bookingDetails" class="hidden mt-4 booking-details text-gray-700">
                    <h3 class="text-xl font-semibold">
                        Booking Details:
                    </h3>
                    <p id="NameDis"></p>
                    <p id="FromDis"></p>
                    <p id="ToDis"></p>
                    <p id="PhoneDis"></p>
                    <p id="DateDis"></p>
					<p id="UserDis"></p>
                    <p class="text-green-500 font-semibold success-message" id="successMessage"></p>
                    <button id="downloadTicketBtn" class="bg-blue-500 text-white px-4 py-2 rounded-md mt-2 hidden" style="background-color: #5a5ae4;" >
                        Download Ticket

                    </button>

                </div>-->
            </div>
        </div>
    </div>
</section>

  <section class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="bg11.avif" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>METRO</span>
              </h2>
            </div>
            <p>
              The Surat Metro is an under-construction rapid transit rail system for Surat in Gujarat state of India. Two corridors with a combined length of 40.35 kilometers are under construction since 18 January 2021.[3] The project is expected to be completed by December 2027 at an estimated cost of ₹12,020.32 crore (US$1.5 billion).[1]
            </p>
            <a href="https://en.wikipedia.org/wiki/Surat_Metro#:~:text=The%20Surat%20Metro%20is%20an,construction%20since%2018%20January%202021.">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  

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

  
  <!--<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Full Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
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
  </section>-->
  
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
  <script>
    function submitForm(event) {

    event.preventDefault();
    // assigning values
	const line1 = document.getElementById('line').value;
	const station1 = document.getElementById('station').value;
	const line2 = document.getElementById('line2').value;
	const station2 = document.getElementById('station2').value;
    const Date = document.getElementById('inputDate').value;
	const userName = document.getElementById('user_name').value;

    //-------------------------

    document.getElementById('NameDis').textContent = `Line_1: ${line1}`;
    document.getElementById('FromDis').textContent = `From: ${station1}`;
    document.getElementById('ToDis').textContent = `Line_2: ${line2}`;
    document.getElementById('PhoneDis').textContent = `To: ${station2}`;
    document.getElementById('DateDis').textContent = `Date: ${Date}`;
	document.getElementById('UserDis').textContent = `Name: ${userName}`;
    document.getElementById('successMessage').textContent = 'Booking Successful!';
    document.getElementById('bookingDetails').classList.remove('hidden');
    document.getElementById('downloadTicketBtn').classList.remove('hidden');
    document.getElementById('downloadTicketBtn').onclick = downloadTicket;
}


function downloadTicket() {

const line1 = document.getElementById('line').value;
const station1 = document.getElementById('station').value;
const line2 = document.getElementById('line2').value;
const station2 = document.getElementById('station2').value;
const userName = document.getElementById('user_name').value;
const Date = document.getElementById('inputDate').value;


const ticketContent = 
`Name: ${line1}\n
From:${station1}\n
To:${line2}\n
Phone:${station2}\n
Name:${userName}\n
Date:${Date}`;

const blob = new Blob([ticketContent], { type: 'text/plain' });
    
const link = document.createElement('a');

link.href = window.URL.createObjectURL(blob);

link.download = 'ticket.txt';

link.click();

}
function downloadTicket() {
	const line1 = document.getElementById('line').value;
	const station1 = document.getElementById('station').value;
	const line2 = document.getElementById('line2').value;
	const station2 = document.getElementById('station2').value;
	const userName = document.getElementById('user_name').value;
    const Date = document.getElementById('inputDate').value;

    // Create the PDF content
    const documentDefinition = {
        content: [
            { text: 'Booking Details:', fontSize: 16, bold: true, margin: [0, 0, 0, 10] },
            { text: `Name: ${line1}`, fontSize: 12 },
            { text: `From: ${station1}`, fontSize: 12 },
            { text: `To: ${line2}`, fontSize: 12 },
            { text: `Phone: ${station2}`, fontSize: 12 },
			{ text: `Name: ${userName}`, fontSize: 12 },
            { text: `Date: ${Date}`, fontSize: 12 }
        ]
    };

    // Create the PDF
    pdfMake.createPdf(documentDefinition).download('ticket.pdf');
}

function cancelBooking() {
    // Clear input fields or perform any other cancellation logic here
    document.getElementById('inputPatientName').value = '';
    document.getElementById('inputDoctorName').selectedIndex = 0;
    document.getElementById('inputDepartmentName').selectedIndex = 0;
    document.getElementById('inputPhone').value = '';
    document.getElementById('inputDate').value = '';

    // Hide booking details and success message if displayed
    document.getElementById('bookingDetails').classList.add('hidden');
    document.getElementById('successMessage').textContent = '';

    // Optionally, you can also hide the download ticket button if shown
    document.getElementById('downloadTicketBtn').classList.add('hidden');
}
</script>

<script>
		$(document).ready(function(){
			function loadStations(type, line_id){
				$.ajax({
					url: "load-station.php",
					type: "POST",
					data: {type: type, id: line_id},
					success: function(lines){
						if(type == "stationName"){
							$("#station").html(lines);
						}
						else{
							$("#line").append(lines);
						}
					}
				});
			}
			loadStations();
			
			$("#line").on("change", function(){
				var line = $("#line").val();
				
				if(line != " "){
					loadStations("stationName", line);
				}
				else{
					$("#station").html("");
				}
			});
		});
	</script>
	
	<script>
		$(document).ready(function(){
			function loadStations(type, line_id){
				$.ajax({
					url: "load-station-2.php",
					type: "POST",
					data: {type: type, id: line_id},
					success: function(lines){
						if(type == "stationName"){
							$("#station2").html(lines);
						}
						else{
							$("#line2").append(lines);
						}
					}
				});
			}
			loadStations();
			
			$("#line2").on("change", function(){
				var line = $("#line2").val();
				
				if(line != " "){
					loadStations("stationName", line);
				}
				else{
					$("#station2").html("");
				}
			});
		});
	</script>

</body>

</html>