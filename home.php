<?php

require_once 'connection.php';

$sql = "SELECT * FROM projects LIMIT 3";
$result = $conn->query($sql);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | InspireHealth</title>
    <!-- connect with css-->
    <link rel="stylesheet" href="css/home.css">

    <script type="text/javascript" src="./../includes/code.jquery.com_jquery-3.7.0.min.js" ></script>
	<script type="text/javascript" src="./../includes/init_page.js"></script>

</head>
<body>
<?php
 include_once 'header.php';
?>
<!--<div id="logo"></div>-->
<!-- Nav Menu -->
<header class="nav-top">
<a href=""><img src="images/logos/TRANSPARENT_LOGO.png" id="logo" alt="logo-IH" width="190" height="70"></a>
<!--<div id="b1" class="box">
    <svg id="i1" class="icon" viewBox="0 0 100 100">
      <path id="top-line-1"     d="M30,37 L70,37 Z"></path>
      <path id="middle-line-1" 	d="M30,50 L70,50 Z"></path>
      <path id="bottom-line-1" 	d="M30,63 L70,63 Z"></path>
    </svg>
  </div>-->
<nav class="nav-links">
<!--<div id="b1" class="box">
    <svg id="i1" class="icon" viewBox="0 0 100 100">
      <path id="top-line-1"     d="M30,37 L70,37 Z"></path>
      <path id="middle-line-1" 	d="M30,50 L70,50 Z"></path>
      <path id="bottom-line-1" 	d="M30,63 L70,63 Z"></path>
    </svg>
  </div>-->
  <a href="#">Home</a>
  <a href="#">Projects</a>
  <a href="#">Team</a>
  <a href="#">Jobs</a>
  <a href="#">News</a>
  <a href="#">Contact</a>
  <div id="indicator"></div>
</nav>
</header>
<img src="images/Home/Surgery-home2.jpg" alt="surgery" class="surgery-img" width="620" height="400">



<?php
if ($result->num_rows > 0) {
    //print_r ($result->fetch_all());
while($row = mysqli_fetch_assoc($result) ){

?>
 <div class="container">
<div class="custom-card">
          <div class="img-box"><img src="<?php echo $row["image"]; ?>"></div>
          <div class="custom-content">
            <h2><?php echo $row["name"]; ?></h2>
            <p><span><?php echo $row["project_title"]; ?></span><br><?php echo $row["description"]; ?></p>
            <a href="">Read More</a>
</div>

        </div>
        
        

        <?php
}

}

        ?>
        </div>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/409445/animateAnything.js"></script>
        <script src="js/script.js"></script>

</body>
</html>