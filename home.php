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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></head>


    <script type="text/javascript" src="./../includes/code.jquery.com_jquery-3.7.0.min.js" ></script>
	<script type="text/javascript" src="./../includes/init_page.js"></script>

</head>
<body>
<?php
 include_once 'header.php';
?>

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

<img src="images/Home/Surgery-home2.jpg" alt="surgery" class="surgery-img" width="620" height="400">


<div class="overlay">
            <h2>Our Mission</h2>
            <p>Inspire healthcare professionals to optimize the patient-journey by means of technological innovation.</p>
        </div><br><br><br><br>
        <section class="seperator-wrapper">
  <div class="seperator gradient">
  </div>
</section>
  
<div class="container">
<div id="table">
    <div id="top">  
        <h2>Our Projects</h2>
    </div>
</div>
<?php
if ($result->num_rows > 0) {
    //print_r ($result->fetch_all());
while($row = mysqli_fetch_assoc($result) ){

?>

<div class="custom-card">
          <div class="img-box"><img src="<?php echo $row["image"]; ?>"></div>
          <div class="custom-content">
            <h3><?php echo $row["name"]; ?></h3><br>
            <p><span><?php echo $row["project_title"]; ?></span><br><?php echo $row["description"]; ?></p>
            <a href="">Read More</a>
</div>

        </div>
    


        <?php
}

}

        ?>
        </div>
        <div class="container-line">
  <div class="cont-left"></div>
  <div class="line"></div>
  <div class="cont-right"></div>
</div> <br><br><br><br>
<div id="values-title">  
        <h2>Our Values</h2>
    </div>
    <div class="grid">
  <div class="box"><h4>PATIENT JOURNEY</h4></div>
  <div class="box"><h4>OPEN ARCHITECTURE</h4></div>
  <div class="box"><h4>PEOPLE FOCUS</h4></div>
  <div class="box"><h4>TECH INSPIRATION</h4></div>
  <div class="box"><h4>CRONOS ECO-SYSTEM</h4></div>
  <div class="box"><h4>CO-DEFINITION</h4></div>
</div>
<div class="container-line">
  <div class="cont-left"></div>
  <div class="line"></div>
  <div class="cont-right"></div>
</div><br><br><br><br>
<!-- Our Expertises -->
<div id="expertises-title">  
        <h2>Our Expertises</h2>
    </div>
<div class="slider">
            <div class="item">
                <h5>Strategy & Vision</h5>
               <p> We organize ideation and inspiration sessions with you in order to build a long-term strategy to optimize your operations with technology. We listen to your vision and ambition and try to map the best technological and people-oriented approach to realize this ambition. We show you what can be done and how a strategic roadmap that spans multiple years can be created.</p>
            </div>
                
            <div class="item">
                <h5>Infrastructure</h5>
                <p> 
			We build on the experience of the Uptime Group in equipping hospitals and enterprises with networking, storage, servers, cabling, etc. solutions. 
			We proudly serve already the majority of the Belgian hospitals with infrastructure solutions.</p>
            </div>
            <div class="item">
                <h5>Security</h5>
                <p>Cybersecurity is a hot topic and therefore we are also organized with several IT and OT security expert centers that can guide and assist you through the all kinds of cybersecurity measures, ranging from identity management and access control over secure hosting solutions to data protection, data privacy and data sovereignty.</p>
            </div>
            <div class="item">
                <h5>Connectivity</h5>
                <p>'If it's not connected, it doesn't exist' could be a valid quote these days. Everybody is always connected and data exchange has become intrinsic part of our day-to-day life. However, the ways data are exchanged is in continuous evolution, offering new opportunities for the medical staff to stay in contact with patients, exchange data between clinicians, introduce remote monitoring capabilities and even remotely assist during surgeries and other clinical interventions. Our in-house expertise, strengthened via partnerships with the major telco operators, offers you access to a large pool of connectivity experts that can assist you with your projects.
		        </p>
            </div>
            <div class="item">
            <h5>Data</h5>
            <p>'Data is the holy grail' or 'Data is the new gold' is an often made statement, especially when it comes to patient data. Everybody is eager to get access to patient data to improve patient treatments, to get better insights in patient revalidation, to optimize medical procedures, to create personalized medication and evolve towards predictive healthcare. With the various data expert centres we have experience in architecting scalable and solid data solutions that can become federated data networks across multiple hospitals, regions and countries while keeping your sensitive data sound and safe.</p>
            </div>
            <div class="item">
            <h5>Artificial Intelligence</h5>
            <p>
			Data is the prerequisite for introducing artificial intelligence and deep learning techniques that
			everybody is so eager to introduce in medical applications. With InspireHealth we can tap in to a pool
			of almost 200 AI specialists that have experience in building models for all kinds of industries, but 
			also for hospital applications. Not only can AI be used to optimize operational processes, it can also 
			assist in detecting patterns over a much larger dataset than human beings can and as such identify
			anomalies that can lead to better clinical insights and as a consequence also better patient outcomes.
</p>
</div>
            <div class="item">
            <h5>Implementation</h5>
            <p>
			Cronos is known for building solutions. Not only do we co-define them with you, we also architect, implement,
			validate and manage them with you. With an army of several thousends of SW specialists, we can build any kind of
			solution, ranging from mobile apps over cloud applications and on-premise solutions. These can be custom made,
			integrations of existing components or products or a combination of both. Whatever dream you have in mind,
			we can work with you to create it.
</p>
</div>
            <div class="item">
            <h5>Governance</h5>
            <p>
			Once we have implemented a solution for you, we can help you in managing it. This can be done
			in various ways, ranging from on-demand support to fully hosted applications and systems. It
			all depends on your solution governance strategy. Let's sit together and discuss the options.
</p>
</div>
            <div class="item">
            <h5>People</h5>
            <p>
			The people providing medical care need solutions that can help them in better serving the patients.
			Therefore, any technological solution will only bring value when it is being used and offers real
			operational value for the medical staff. Guiding the medical practitioners through the digital
			change is a process that starts at the beginning of the project and is not an afterthought. As 
			a consequence, we have dedicated expertise in guiding staff through a digital transformation, starting
			from the initial ideation to the final on-site training and operational follow-up.
            </p>
        </div>
            <div class="item">
            <h5>Sustainability</h5>
            <p>
			It goes without saying that we make sure that our solutions are as eco-friendly as possible.
			From the design we pay attention to processing power and optimize the solutions to make use of 
			as little environmental resources as possible. We can also work with you to create insights on
			your carbon footprint and define approaches to reduce it according to international guidelines.
</p>
</div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>
        <br>
       <div class="expertises-list">
        <div id="expertise-name">Strategy & Vision</div>
        <div id="expertise-name">Infrastructure</div>
        <div id="expertise-name">Security</div>
        <div id="expertise-name">Data</div>
        <div id="expertise-name">Artificial Intelligence</div>
        <div id="expertise-name">Implementation</div>
        <div id="expertise-name">Governance</div>
        <div id="expertise-name">People</div>
        <div id="expertise-name">Sustainability</div>

        </div>


        <div class="container-line">
  <div class="cont-left"></div>
  <div class="line"></div>
  <div class="cont-right"></div>
</div>
<br>

<!-- Our Partners -->
<div class="scroller" data-direction="right" data-speed="slow">
  <div class="scroller__inner">
    <img src="images/partners/algorhythm.png">
    <img src="images/partners/arxus.png">
    <img src="images/partners/carealize.png">
    <img src="images/partners/cloudfuel.png">
    <img src="images/partners/EdenceHealth_transp.png">
    <img src="images/partners/empty.png">
    <img src="images/partners/epicdata.png">
    <img src="images/partners/Healthonauts_Black.png">
    <img src="images/partners/icapps.png">
    <img src="images/partners/Roborana.png">
    <img src="images/partners/Sparkle.png">
    <img src="images/partners/stelvio.png">
    <img src="images/partners/uptime_group.png">
   
  </div>
  <br>
</div>


  <section class="seperator-wrapper">
  <div class="seperator gradient">
  </div>
</section>

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
<script src="script.js"></script>
<script src="app.js"></script>

</body>
</html>