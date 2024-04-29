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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>


    <script type="text/javascript" src="./../includes/code.jquery.com_jquery-3.7.0.min.js" ></script>
	  <script type="text/javascript" src="./../includes/init_page.js"></script>

</head>
<body>
<?php
 include_once 'header.php';
?>
<!--<div id="logo"></div>-->
<!-- Nav Menu -->
<!--<header class="nav-top">
<a href=""><img src="images/logos/TRANSPARENT_LOGO.png" id="logo" alt="logo-IH" width="190" height="70"></a>


<nav class="nav-links">
  <a href="#">Home</a>
  <a href="#">Projects</a>
  <a href="#">Team</a>
  <a href="#">Jobs</a>
  <a href="#">News</a>
  <a href="#">Contact</a>
  <div id="indicator"></div>
</nav>
</header>-->

<header>
    <nav>
        <ul class='nav-bar'>
            <li class='logo'><a href='#'><img src='./images/logos/TRANSPARENT_LOGO.png'></a></li>
            <input type='checkbox' id='check' >
            <span class="menu">
                <li><a href="">Home</a></li>
                <li><a href="">Projects</a></li>
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

</body>
</html>