<?php

require_once 'connection.php';

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);
  


//$conn->close(); 

//var_dump($result);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects view</title>
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>


    <script type="text/javascript" src="./../includes/code.jquery.com_jquery-3.7.0.min.js" ></script>
	<script type="text/javascript" src="./../includes/init_page.js"></script>

</head>
<body>
<div id="bg-right"></div>
<header>
    <nav>
        <ul class='nav-bar'>
            <li class='logo'><a href='home.php'><img src='./images/logos/TRANSPARENT_LOGO.png'></a></li>
            <input type='checkbox' id='check' >
            <span class="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="">Jobs</a></li>
                <li><a href="">News</a></li>
                <li><a href="contact.php">Contact</a></li>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
    </header>
<h1>Our Projects</h1>
<p>InspireHealth builds on the expertise of the Cronos eco-system to create patient-centric solutions for the healthcare market. Applications address most of the challenges todays healthcare providers face, ranging from patient data security over remote patient monitoring to data-driven predictive and preventive medicine. Since InspireHealth operates on the infrastructure, application, data and AI layer, we are perfectly suited for end-2-end ICT projects within any healthcare facility.</p>


<br><br>
<!-- last projects -->


        <!-- Product listing section -->

    <section class="carousel">
    <div class="overlay">
            <h2>Last Projects..</h2>
        </div><br><br>
    <?php
if ($result->num_rows > 0) {
    //print_r ($result->fetch_all());
while($row = mysqli_fetch_assoc($result) ){

?>

      <main>
        <div class="card_desing_cnt">
            <div class="crd_dsgn">
                <a href="project_details.php">
                    <div class="crd_img">
                        <img src="<?php echo $row["image"]; ?>" alt="">
                    </div>
                    <div class="crd_hdng">
                        <h5><?php echo $row["project_title"]; ?></h5>
                    </div>
                </a>
            </div>
      <?php
}

}

        ?>
    </section>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>     
<br><br><br><br><br><br>     

<!-- </div>-->
    <!-- search bar -->
   <!-- <div class="container">
  <input class="searchh" type="text" placeholder="Search...">
  <div class="search"></div>
</div>-->

<footer class="footer">
  	 <div class="container-f">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>About InspireHealth</h4>
  	 			<ul>
  	 				<li>
                        <p style="text-align: left; font-size: 14px; width: 400px; color: #fff;">InspireHealth brings together healthcare & IT expertise of the Cronos ecosystem with the ambition to smoothen the patient journey by inspiring healthcare professionals with solutions using state-of-the-art technology.</p></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<span></span>
  	 		</div><br>
  	 		<div class="footer-col">
  	 			<h4>Contact</h4>
  	 			<ul>
  	 				<li><a href="#">info@InspireHealth.be</a></li>
  	 				<li style="color:#fff;">+32 3 450 80 30</li>
  	 				<li style="color:#fff;">+32 473 93 35 59</li>
  	 				<li><a href="https://www.linkedin.com/company/inspirehealth-nv/about">LinkedIn</a></li>
  	 			</ul>
  	 		</div>
  	
<div class="footer-col">
  	 			<h4>Office Adress</h4>
  	 			<ul>
  	 				<li>
                        <p style="text-align: left; font-size: 14px; width: 400px; color: #fff;">Veldkant 33a</p></li>
                        <p style="text-align: left; font-size: 14px; width: 400px; color: #fff;">2550 Kontich</p></li>
                        <p style="text-align: left; font-size: 14px; width: 400px; color: #fff;">Belgium</p></li>
                    </ul>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


        <!-- JavaScript -->
        <script src="project.js"></script>
     
</body>
</html>