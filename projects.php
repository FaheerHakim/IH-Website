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
                <li><a href="">Team</a></li>
                <li><a href="">Jobs</a></li>
                <li><a href="">News</a></li>
                <li><a href="">Contact</a></li>
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
<div class="overlay">
            <h2>Last Projects</h2>
        </div>

        <!-- Product listing section -->


<!--<div class="containerprojects">
    <div class="card">
      <div class="img-wrapper">
         <img src="<?php echo $row["image"]; ?>" alt="">
      </div>
      <p><?php echo $row["project_title"]; ?></p>
  </div>-->
  <ul class="cards">
  <?php
if ($result->num_rows > 0) {
    //print_r ($result->fetch_all());
while($row = mysqli_fetch_assoc($result) ){

?>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fence"><img src="<?php echo $row["image"]; ?>"></div>
      <div class="card__content">
        <div class="card__title"><?php echo $row["project_title"]; ?></div>
        <p class="card__text"><?php echo $row["description"]; ?></p>
        <button class="btn btn--block card__btn">Read More</button>
      </div>
    </div>
  </li>

  <?php
}

}

        ?>
       
       <!-- </div>-->
    <!-- search bar -->
    <div class="container">
  <input class="searchh" type="text" placeholder="Search...">
  <div class="search"></div>
</div>



        <!-- JavaScript -->
        <script src="project.js"></script>
     
</body>
</html>