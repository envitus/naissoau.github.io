<style>
	/**********************************/
/********* Team #10 Style *********/
/**********************************/
.team-10 {
    text-align: center;
    margin-bottom: 30px;
    border-radius: 5px;
}

.team-10 .team-img {
    border-radius: 5px;
    overflow: hidden;
}

.team-10 .team-img img {
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.team-10 .team-content {
    position: relative;
    width: 90%;
    padding: 20px;
    margin: -60px auto 0 auto;
    background: #ffffff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: transform 0.6s;
    transform-style: preserve-3d;
    border-radius: 5px;
}

.team-10:hover .team-content {
    transform: rotateY(180deg);
}

.team-10 .team-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    background: #ffffff;
    border-radius: 5px;
    transform: rotateY(180deg);
}

.team-10 .team-content h2 {
    font-size: 25px;
    font-weight: 400;
    letter-spacing: 2px;
}

.team-10 .team-content h3 {
    font-size: 16px;
    font-weight: 300;
}

.team-10 .team-content p {
    font-size: 16px;
    font-weight: 400;
    line-height: 22px;
}

.team-10 .team-social {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0;
}

.team-10 .team-social a {
    display: inline-block;
    width: 40px;
    height: 40px;
    margin-right: 5px;
    padding: 11px 0 10px 0;
    font-size: 16px;
    line-height: 16px;
    text-align: center;
    color: #ffffff;
    border-radius: 5px;
    transition: all .3s;
}

.team-10 .team-social a.social-tw {
    background: #00acee;
}

.team-10 .team-social a.social-fb {
    background: #3b5998;
}

.team-10 .team-social a.social-li {
    background: #0e76a8;
}

.team-10 .team-social a.social-in {
    background: #3f729b;
}

.team-10 .team-social a.social-yt {
    background: #c4302b;
}

.team-10 .team-social a:last-child {
    margin-right: 0;
}

.team-10 .team-social a:hover {
    background: #222222;
}
.custom-breadcrumns {
  padding: 40px 0; }
  .custom-breadcrumns span, .custom-breadcrumns a {
    font-size: 16px; }
  .custom-breadcrumns a {
    display: inline-block;
    color: #bdbdbd; }
    .custom-breadcrumns a:hover {
      color: #259DE0; }
  .custom-breadcrumns .current {
    color: #259DE0; }
	
</style> 

<!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h3 class="text-uppercase text-white font-weight-bold">About Us</h3>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

 <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php?page=home">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">About Us</span>
      </div>
    </div>

    <section class="page-section">
		<center><img src="image/NAISS OAU LOGO.jpeg" width="500" height="500"> <img src="image/NAISSOAU-banner2.jpg" width="500" height="500"></center>
        <div class="container"><br>
    <?php echo html_entity_decode($_SESSION['system']['about_content']) ?>
        </div>
        </section>


<div class="row">
    <div class="col-lg-6">
      <img
        src="image/medium-shot-nigerian-dancers-with-jewelry.jpg"
        data-mdb-img="image/medium-shot-nigerian-dancers-with-jewelry.jpg"
        alt="Table Full of Spices"
        class="w-100 mb-4 mb-md-4 shadow-5-strong rounded"
      />
		
      <img
        src="image/close-up-hand-holding-wooden-stick.jpg"
        data-mdb-img="image/medium-shot-nigerian-dancers-with-jewelry.jpg"
        alt="Coconut with Strawberries"
        class="w-100 shadow-5-strong rounded"
      />
    </div><br><br>
    <div class="col-lg-6">
      <img
        src="image/nigerian-woman-dancing-medium-shot.jpg"
        data-mdb-img="image/nigerian-woman-dancing-medium-shot.jpg"
        alt="Dark Roast Iced Coffee"
        class="w-100 mb-4 mb-md shadow-5-strong rounded"
      />
      <img
        src="image/hands-playing-drums-close-up.jpg"
        data-mdb-img="image/hands-playing-drums-close-up.jpg"
        alt="Dark Roast Iced Coffee"
        class="w-100 shadow-5-strong rounded"
      />
    </div>
  </div>
</div><br>


<div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>Who We Are</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem nesciunt quaerat ad reiciendis perferendis voluptate fugiat sunt fuga error totam.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p>
            <p><a href="index.php?page=contact" class="btn btn-outline-primary">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

			     <!-- Team #10 Start -->
			            <div class="container mt-3 pt-2">
                <h4 class="text-center text-white">Our Executives</h4>
                <hr class="divider">

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>

            </div>
            <div class="row">
                <div class="column">
                    <div class="team-10">
                        <div class="team-img">
                            <img src="image/GreatIfe Alumni-24.jpg" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Ogbueyi Ugonnaya</h2>
                            <h3>President </h3>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-overlay">
                                <p>Office of the President of the National Association of Imo State Students </p>
                                <div class="team-social">
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-10">
                        <div class="team-img">
                            <img src="image/GreatIfe Alumni-31.jpg" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Mollie Ross</h2>
                            <h3>Art Director</h3>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-overlay">
                                <p>Some text goes here that describes about team member</p>
                                <div class="team-social">
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-10">
                        <div class="team-img">
                            <img src="img/team-1-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Dylan Adams</h2>
                            <h3>Developer</h3>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-overlay">
                                <p>Some text goes here that describes about team member</p>
                                <div class="team-social">
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="team-10">
                        <div class="team-img">
                            <img src="img/team-1-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Jennifer Page</h2>
                            <h3>Designer</h3>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="team-overlay">
                                <p>Some text goes here that describes about team member</p>
                                <div class="team-social">
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
<center><a href="#" class="btn btn-warning">See More</a></center>
        <!-- Team #10 End -->

          <div class="container mt-3 pt-2">
                <h4 class="text-center text-white">Kindly Get in Touch with Us!</h4>
                <hr class="divider">

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>

<?php
if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $conn = mysqli_connect("localhost", "root", "", "alumni_db") or die("Connection Error: " . mysqli_error($conn));
    $stmt = $conn->prepare("INSERT INTO tbl_contact (user_name, user_email, subject, content) VALUES (?, ?, ?, ?)");


    $message = "Your contact information is saved successfully.";
    $type = "success";
    $conn->close();
}
require_once "contact-view.php";
?>

			