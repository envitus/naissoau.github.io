<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 300vh;
    z-index: -10;
    position: relative;
    padding: 1em;
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
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                        <h3 class="text-white">Contact Us</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>

 <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.php?page=home">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Contact Us</span>
      </div>
    </div>
            <div class="container-fluid mt-3 pt-2">
               
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
					
                
          <div class="container mt-3 pt-2">
                <h4 class="text-left text-white">Kindly Get in Touch with Us!</h4><br>                        
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