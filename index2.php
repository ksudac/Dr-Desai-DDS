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
<div class="span10 mobile-spacer-container">   

<div class="content pagination-centered">
<div class="row-fluid">
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