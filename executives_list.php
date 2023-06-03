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
.alumni-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}
.alumni-img {
    width: calc(30%);
    max-height: 30vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.alumni-list .card-body{
    width: calc(70%);
}
.alumni-img img {
    border-radius: 100%;
    max-height: calc(100%);
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
.alumni-text{
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
.alumni-list p {
	margin:unset;
}
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

</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                        <h3 class="text-white">Our Executives</h3>
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
        <span class="current">Our Executives</span>
      </div>
    </div>
        	<div class="container">
        		<div class="card mb-4 mt-4">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-8">
		                    <div class="input-group mb-3">
		                      <div class="input-group-prepend">
		                        <span class="input-group-text" id="filter-field"><i class="fa fa-search"></i></span>
		                      </div>
		                      <input type="text" class="form-control" id="filter" placeholder="Filter name,course, etc." aria-label="Filter" aria-describedby="filter-field">
		                    </div>
		                </div>
		                <div class="col-md-4">
		                    <button class="btn btn-primary btn-block btn-sm" id="search">Search</button>
		                </div>
		            </div>
		            
		        </div>
		    </div>
        	</div>	
            <div class="container-fluid mt-3 pt-2">
               
                <div class="row-items">
                <div class="col-lg-12">
                    <div class="row">
                <?php
                $fpath = 'admin/assets/uploads';
                $alumni = $conn->query("SELECT a.*,c.course,Concat(a.lastname,', ',a.firstname,' ',a.middlename) as name from alumnus_bio a inner join courses c on c.id = a.course_id order by Concat(a.lastname,', ',a.firstname,' ',a.middlename) asc");
                while($row = $alumni->fetch_assoc()):
                ?>
                <div class="col-md-4 item">
                <div class="card alumni-list" data-id="<?php echo $row['id'] ?>">
                        <div class="alumni-img" card-img-top>

                            <img src="<?php echo $fpath.'/'.$row['avatar'] ?>" alt="">
                        </div>
                    <div class="card-body">
                        <div class="row align-items-center h-100">
                            <div class="">
                                <div>
                                <p class="filter-txt"><b><?php echo $row['name'] ?></b></p>
                                <hr class="divider w-100" style="max-width: calc(100%)">
                                <p class="filter-txt">Email: <b><?php echo $row['email'] ?></b></p>
                                <p class="filter-txt">Course: <b><?php echo $row['course'] ?></b></p>
                                <p class="filter-txt">Batch: <b><?php echo $row['batch'] ?></b></p>
                                <p class="filter-txt">Currently working in/as <b><?php echo $row['connected_to'] ?></b></p>
                                    <br>
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
                            <img src="img/team-1-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-content">
                            <h2>Mollie Ross</h2>
                            <h3>Art Director</h3>
                            <div class="team-social">
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
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
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
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
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
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


                    </div>
                </div>
                <br>
                </div>
                <?php endwhile; ?>
                </div>
                </div>
                </div>
            </div>


<script>
    // $('.card.alumni-list').click(function(){
    //     location.href = "index.php?page=view_alumni&id="+$(this).attr('data-id')
    // })
    $('.book-alumni').click(function(){
        uni_modal("Submit Booking Request","booking.php?alumni_id="+$(this).attr('data-id'))
    })
    $('.alumni-img img').click(function(){
        viewer_modal($(this).attr('src'))
    })
     $('#filter').keypress(function(e){
    if(e.which == 13)
        $('#search').trigger('click')
   })
    $('#search').click(function(){
        var txt = $('#filter').val()
        start_load()
        if(txt == ''){
        $('.item').show()
        end_load()
        return false;
        }
        $('.item').each(function(){
            var content = "";
            $(this).find(".filter-txt").each(function(){
                content += ' '+$(this).text()
            })
            if((content.toLowerCase()).includes(txt.toLowerCase()) == true){
                $(this).toggle(true)
            }else{
                $(this).toggle(false)
            }
        })
        end_load()
    })

</script>