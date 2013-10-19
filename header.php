<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Dublin Plaza Dental</title>
<meta charset="utf-8">
<meta content='Dublin Plaza Dental'  name='description'/>
<meta content='dublin, plaza, dental, desai, tejas, dentist' name='keywords'/>
<meta content='Karen Suda-Cederquist' name='author'/>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/desai.css" />
<link rel="shortcut icon" href="img/favicon.png" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<!--[if gt IE 7]>
    <link rel="stylesheet" type="text/css" href="css/ie_desai.css" />
<![endif]-->
<!--[if gte IE 8]>
    <link rel="stylesheet" type="text/css" href="css/ie_desai.css" />
<![endif]-->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $('.carousel').carousel({
	interval: 3000});
});

</script>
<script type="text/javascript">
$(document).ready(function() {
   var $myContainer = $('.content').show();
   var height = $myContainer.height();
   var myWindow = window.innerHeight;
   var $mobileSpacerHeight = myWindow - height - 234;
   console.log("height: " + height);
   console.log("myWindow: " + myWindow);
   console.log("mobileSpacerHeight: " + $mobileSpacerHeight);
      if (height < myWindow) {
          $(".mobile-spacer").css("height", $mobileSpacerHeight + "px");
	  console.log("in if, height is adjusted to: " + $mobileSpacerHeight);
      }
      else{
	 $(".mobile-spacer").css("height", "0px");
	 console.log("in else, height: 0px");
      } 
});
</script>


</head>