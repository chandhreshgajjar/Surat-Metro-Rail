<!DOCTYPE html>
<html>
<?php
	ob_start();
	include ('connection.php');
?>
<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SuratMetro</title>


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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
<script>

	function login(){
		
		var email = document.forms["lf"]["email"].value;
		var b = /^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;
		
		if(email == ""){
			alert("Enter your email");
			return false;
		}
		else if(!b.test(email)){
			alert("Enter valid characters");
			return false;
		}
		
		var password = document.forms["lf"]["password"].value;
		
		if(password == ""){
			alert("Enter your password");
			return false;
		}
	}
</script>

</head>

<body>

  <div class="hero_area">
    
    <?php
		include ('header.php');
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
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
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
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
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
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to
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
  
  <!--<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form>
            <h4>
              BOOK <span>TICKET</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Name</label>
                <input type="text" class="form-control" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">FROM</label>
                <select name="" class="form-control wide" id="inputDoctorName">
                  <option value="Normal distribution ">ATHWAGATE </option>
                  <option value="Normal distribution ">CHOWK </option>
                  <option value="Normal distribution ">KATARGAM </option>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">TO</label>
                <select name="" class="form-control wide" id="inputDepartmentName">
                  
                  <option value="Normal distribution ">ATHWAGATE </option>
                  <option value="Normal distribution ">CHOWK </option>
                  <option value="Normal distribution ">KATARGAM </option>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">check Now</button>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>-->
  
  <!--<section class="about_section">
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
  </section>-->
  

  <!--<section class="treatment_section layout_padding">
   
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          <span>LOGIN</span>
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
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
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
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
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
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
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
                alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything
              </p>
              <a href="https://themetrorailguy.com/surat-metro-information-route-maps-fares-tenders-updates/">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2 style="margin:100px 0px 0px 0px">LOGIN</h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form name="lf" method="POST" onSubmit="return login();">
              <div>
                <input type="text" placeholder="Email" name="email">
              </div>
              <div>
                <input type="password" placeholder="Password" name="password">
              </div>
			  
              <div class="btn_box">
                <button id="submit" name="submit" type="submit">
                Login
                </button>
              </div>
			  <?php

					if(isset($_REQUEST['submit'])){
			
						$email = $_REQUEST['email'];
						$password = $_REQUEST['password'];;
		
						$check = $link->rawQueryOne("select * from user where email='$email' and password='$password'");
		
						if($check){
							header ('location:index.php');
							session_start();
							$_SESSION['user_id'] = $check['user_id'];
							$_SESSION['user_name'] = $check['user_name'];
						}
						else{
			
			?>
			<p style="color:red">*Incorrect E-mail or password</p>
			<?php
				
						}
		
					}
			?>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>
