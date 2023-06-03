<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
        $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
         foreach ($query as $key => $value) {
          if(!is_numeric($key))
            $_SESSION['system'][$key] = $value;
        }
    ob_end_flush();
    include('header.php');

	
    ?>
	<?php 
include 'admin/db_connect.php'; 
?>
	
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.gallery-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.gallery-img,.gallery-list .card-body {
    width: calc(50%)
}
.gallery-img img{
    border-radius: 5px;
    min-height: 50vh;
    max-width: calc(100%);
}
span.hightlight{
    background: yellow;
}
.carousel,.carousel-inner,.carousel-item{
   min-height: calc(100%)
}
header.masthead,header.masthead:before {
        min-height: 50vh !important;
        height: 50vh !important
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
	
.row-items{
    position: relative;
}
.card-left{
    left:0;
}
.card-right{
    right:0;
}
.rtl{
    direction: rtl ;
}
.gallery-text{
    justify-content: center;
    align-items: center ;
}
.masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }

</style>

    <style>
    	header.masthead {
		  background: url(admin/assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    
  #viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
}
#viewer_modal .modal-dialog {
        width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
}
  #viewer_modal .modal-content {
       background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #viewer_modal img,#viewer_modal video{
    max-height: calc(100%);
    max-width: calc(100%);
  }
  body, footer {
    background: #000000e6 !important;
}
 

a.jqte_tool_label.unselectable {
    height: auto !important;
    min-width: 4rem !important;
    padding:5px
}/*
a.jqte_tool_label.unselectable {
    height: 22px !important;
}*/
		
		.form-container {
    background: #f1ecdf;
    border: #e2ddd2 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-bottom: 20px;
}

.input-row label {
    color: #75726c;
}

.input-field {
    width: 100%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
    box-sizing: border-box;
    margin-top: 2px;
}

.span-field {
    font: Arial;
    font-size: small;
    text-decoration: none;
}

.btn-submit {
    padding: 10px 60px;
    background: #9e9a91;
    border: #8c8880 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    border-radius: 2px;
    cursor: pointer;
}

.errorMessage {
    background-color: #e66262;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
    border-radius: 3px;
}

.successMessage {
    background-color: #9fd2a1;
    border: #91bf93 1px solid;
    padding: 5px 10px;
    color: #3d503d;
    border-radius: 3px;
    cursor: pointer;
    font-size: 0.9em;
}

.info {
    font-size: .8em;
    color: #e66262;
    letter-spacing: 2px;
    padding-left: 5px;
}	
    </style>
	
	
	
    <body id="page-top">
        <!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
			
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./"></a><div class="site-logo">
            <left><a href="index.php?page=home" class="d-block">
              <img src="image/naiss logo main.ico" alt="Image">
            </a></left>
				
          </div>
				
				
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
						<li class="nav-item">
                          <div class=" dropdown mr-6">
                              <a href="#" class="nav-link js-scroll-trigger"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Who We Are <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                  <a class="dropdown-item" href="index.php?page=about" id="about"><i class="fa fa-bookmark"></i> About Us</a>
                                  <a class="dropdown-item" href="index.php?page=contact"><i class="fa fa-address-book"></i> Contact Us</a>
								  <a class="dropdown-item" href="#"><i class="fa fa-file-pdf"></i> Constitution</a></div></div></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=executives_list">Executives</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=alumni_list">Staff Advisers</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=gallery">Gallery</a></li>
                        <?php if(isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=forum">News</a></li>
                        <?php endif; ?>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=careers">Jobs</a></li>
                        <?php if(!isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#" id="login">Login</a></li>
										<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search </button>
          </form>
                        <?php else: ?>
                        <li class="nav-item">
                          <div class=" dropdown mr-4">
                              <a href="#" class="nav-link js-scroll-trigger"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                  <a class="dropdown-item" href="index.php?page=my_account" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                                  <a class="dropdown-item" href="admin/ajax.php?action=logout2"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                          </div>
                        </li>
                        <?php endif; ?>
                        
                     
                    </ul>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>

		
<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>

				
  <div id="preloader"></div>
        <footer class=" py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0 text-white">Contact us</h2>
                        <hr class="divider my-4" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div class="text-white"><?php echo $_SESSION['system']['contact'] ?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:<?php echo $_SESSION['system']['email'] ?>"><?php echo $_SESSION['system']['email'] ?></a>
						
                    </div>
                </div>
            </div>
            <br>
            
			<!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="newsletter">
                    <h2>Subscribe Our Newsletter</h2>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about">
                            <h3>About Us</h3>
                            <p class="into" style="justify-content: space-evenly">
                                National Association of Imo State Students Obafemi Awolowo University Chapter is an organization under the Federation of Igbo Students with quality membership board at promoting and facilitating the unity, cultural identification and consciousness among her membership. 
								</p>
							
							<p>Motto: Igwe Bu Ike, Unity is Strength</p><br>
							<img src="image/naiss main logo.png" height="100" width="100">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h3>Quick Links</h3>
                                    <a href="index.php?page=home">Home</a>
                                    <a href="index.php?page=executive-list">Executives </a>
                                    <a href="index.php?page=about">About Us</a>
                                    <a href="index.php?page=gallery">Galleries</a>
                                    <a href="index.php?page=forum">News</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h3>University Links</h3>
                                    <a href="https://oauife.edu.ng/about-oauife/">About OAU</a>
                                    <a href="http://www.etx-ng.com/oau">Transcript</a>
                                    <a href="http://oaucdl.edu.ng/">Distance Learning</a>
                                    <a href="http://computercentre.oauife.edu.ng/">Computer Center</a>
                                    <a href="http://netque.oauife.edu.ng/">Postgraduate Studies</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-contact">
                                    <h3>Get In Touch with Us!</h3>
                                    <p><i class="fa fa-map-marker-alt"> </i>Obafemi Awolowo University, Ile Ife, Osun State Nigeria</p>
                                    <p><i class="fa fa-phone-alt"> </i>+234 803 223 3502</p>
                                    <p><i class="fa fa-envelope"> </i>naissoau@gmail.com</p>
                                    <div class="footer-social">
                                        <a href="https://twitter.com/naissoau"><i class="fab fa-twitter"></i></a>
                                        <a href="https://facebook.com/naissoau"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://instagram.com/naissoau"><i class="fab fa-instagram"></i></a>
                                        <a href="https://linkedin.com/naissoau"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="index.php?page=home">Home </a>
                    <a href="index.php?page=about">About Us </a>
                    <a href="index.php?page=contact">Contact Us </a>
                    <a href="#">Constitution </a>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="index.php?page=home">NAISS OAU</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Powered by <a href="https://facebook.com/venworldglobal">Venworld Global</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
       <?php include('footer.php') ?>
    </body>
    <script type="text/javascript">
      $('#login').click(function(){
        uni_modal("Login",'login.php')
      })
		
    </script>
		<script>
		$(".option").click(function(){
   $(".option").removeClass("active");
   $(this).addClass("active");
   
});
		</script>
		   <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
    <?php $conn->close() ?>

</html>
