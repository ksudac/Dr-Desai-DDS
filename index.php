<?php 
 require_once dirname(__FILE__).'/header.php';
?>

<body>
 
<div id="wrapper">
 
<?php
 $current_page = 'home';
 require_once dirname(__FILE__).'/banner.php';
?>





<!-- Start Main Content-->  
<div class="row-fluid">
<div class="span1"></div>
<div class="span10">   

<div class="content pagination-centered">
<br /><br />

    <div class="row-fluid">
            <div class="span10 offset1" >
            <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner shadow">
                            <div class="active item"><img src="img/slide_show_01.jpg" alt="slide_show_01" /></div>
                            <div class="item"><img src="img/slide_show_03.jpg" alt="slide_show_03" /></div>
                            <div class="item"><img src="img/slide_show_04.jpg" alt="slide_show_04" /></div>
                    </div>		
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            
                    <div class="span1"></div>
            </div>
            </div>
    </div>
    
    <div class="contact_ribbon ribbon down_shadow">
        <img src="img/contact_ribbon_left_side.png" alt="ribbon" class="ribbon_left"/>
        <img src="img/contact_ribbon_right_side.png" alt="ribbon" class="ribbon_right" />
        <div class="row-fluid">
            <div class="span1">
               <img class="contact_image" src="img/icon_contact.png" alt="contact" />
            </div>
            <div class="span7">
                <h1>Call today to schedule an appointment</h1>
                <h4 style="margin-top:-10px;">We look forward to meeting you!</h4>
            </div>
            <div class="span3 pagination-right contact_us">
                <a href="contact.php"><button class="rounded" type="submit">Contact Us <img src="img/icon_arrow.png" alt="arrow" /></button></a>
            </div> 
        </div>
    </div>
    

<div class="row-fluid">
<br />
    <div class="span4" style="margin-left:35px; margin-right: 10px; margin-top: 15px;">            
        <h2>Welcome to Dublin Plaza Dental</h2>
        <p>Dr. Tejas S. Desai and his team at Dublin Plaza Dental would like to welcome you to our office! We hope you will find the atmosphere here friendly, our accommodations comfortable, and our dental services exceptional. We pride ourselves on making dentistry a pleasant experience for you and your family. </p>
        <p>Establishing rewarding and lasting relationships with patients is important to us. We look forward to making each visit to our office a positive experience!</p>

    </div>
    <div class="span3">
        <img src="img/the_dentist.jpg" class="shadow health_icon dentist_img" style="margin-top:25px;" alt="dentist" />
    </div>
    
    <br />
    <div class="span4">
        <div class="row-fluid pill_nav rounded">
            <a href="services.php">
                <div class="span3 icon">
                    <img src="img/icon_tools.png" alt="icon" />
                </div>
                <div class="span9 title">
                    <h3>Services</h3>
                </div>
            </a>
        </div>
        
        <div class="row-fluid pill_nav rounded">
            <a href="new_patient_form.php">
                <div class="span3 icon">
                    <img src="img/icon_toothbrush.png" alt="icon" />
                </div>
                <div class="span9 title">
                    <h3>New Patient Forms</h3>
                </div>
            </a>
        </div>
        
        <div class="row-fluid pill_nav rounded">
            <a href="hippa_policy.php">
                <div class="span3 icon">
                    <img src="img/icon_smile.png" alt="icon" />
                </div>
                <div class="span9 title">
                    <h3 style="line-height: 18pt;">Download Our <br /> HIPAA Policy</h3>
                </div>
            </a>
        </div>
    </div>
           
    <div class="span1"></div>
</div>
<div class="mobile-spacer"></div>
<br /><br /><br />
</div>
</div>
<div class="span1"></div>
</div>  
<!-- End Main Content-->



<?php 
 require_once dirname(__FILE__).'/footer.php';
?>

</div>
</body>
</html>