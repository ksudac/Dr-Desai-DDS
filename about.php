<?php 
 require_once dirname(__FILE__).'/header.php';
?>

<body>
 
<div id="wrapper">
 
<?php
 $current_page = 'about';
 require_once dirname(__FILE__).'/banner.php';
?>





<!-- Start Main Content-->  
   <div class="row-fluid">
        <div class="span1"></div>
        <div class="span10">   
        <div class="content pagination-centered">
            <br /><br />
            <div class="row-fluid">
                <div class="span5" style="margin-left: 40px; margin-top:10px;">
                    <h2>Welcome to Our Office! </h2>
                    <p style="text-align: justify;">Our state of the art office features computerized charts that are virtually paperless,
                    digital X-ray imaging that is faster and reduces radiation exposure, and
                    Intra-Oral digital camera imaging lets you see exactly what the doctor sees.</p>
                    <p style="text-align: justify;">Relax in the chair while we do all the work. We have DVD Movies & Music for your enjoyment.
                    We love kids! Plenty of toys to keep the kids entertained.
                    We follow Strict Infection Control & Sterilization Protocol to keep our patients healthy.</p>
		    
		    <p style="text-align: justify;">Our office participates with most Dental Plans/PPO's.</p>
                </div>
                
                <div class="span6">    
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner shadow ">
                            <div class="active item"><img src="img/office_slide_show01.jpg" alt="office_show_01" /></div>
                            <div class="item"><img src="img/office_slide_show02.jpg" alt="office_show_02" /></div>
                            <div class="item"><img src="img/office_slide_show03.jpg" alt="office_show_03" /></div>
                            <div class="item"><img src="img/office_slide_show04.jpg" alt="office_show_04"/></div>
                            <div class="item"><img src="img/office_slide_show05.jpg" alt="office_show_05" /></div>
                            <div class="item"><img src="img/office_slide_show06.jpg" alt="office_show_06" /></div>
                    </div>		
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
                </div>
                <div class="span1"></div>
            </div>
            
            <div class="row-fluid">
                
                <div class="span3" style="margin-left:20px;">
                    <br>
                    <img src="img/the_dentist.jpg" class="shadow health_icon dentist_img" alt=""/>
                </div>
                <div class="span5" style="margin-left: 40px;">            
                    <h2>Meet Dr. Tejas S. Desai, DDS</h2>
                        <p>Dr. Desai is a graduate of University of California, San Francisco - School of Dentistry - Class of 1998. He is committed to providing his patients
			with the best care possible and offers comprehensive dental services. He has been creating & maintaining healthy happy smiles for patients of all ages,
			in the Tri-Valley community, since 2003. Dr. Desai enjoys all aspects of dentistry, including smile makeovers, cosmetic tooth colored fillings/crowns,
			missing tooth/teeth replacement, cosmetic whitening/bleaching, and periodontal care/oral hygiene management. He is also an Invisalign certified provider. </p>
                        <p>Dr. Desai and his staff are committed to your individual attention and strive to provide personalized care tailored for your unique dental needs and
			goals. He works hard to create the ultimate stress-free and comfortable dental experience. Your health and comfort are his top priority, and he does what
			it takes to help every patient understand their dental condition/symptoms and their treatment options in a relaxed office setting.</p>
		</div>
                <div class="span3 pills rounded">
                    <p class="pagination-centered">UCSF Dental School</p><img src="img/ucsf.png" alt="" width="100" height="100"/>
                    <br>
                    <p class="pagination-centered">Member of American<br> Dental Association</p><img src="img/ada.png" alt="" width="100" height="34"/>
                  
                </div>
                <div class="span1"></div>
            </div>
        
        
        <div class="mobile-spacer"></div>
        <br /><br /><br /><br />
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