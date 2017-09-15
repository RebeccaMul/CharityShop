<?php

include('connect.php');


$query = "SELECT * FROM P1Products WHERE type='menu'";

//send SQL statement to MySQL server
$display = mysql_query($query) or die(mysql_error());

//Shop menu variables
$linkbook=mysql_result($display,0,'description');
$linkchair=mysql_result($display,1,'description');
$linklight=mysql_result($display,2,'description');
$linkstorage=mysql_result($display,3,'description');
$linktable=mysql_result($display,4,'description');

$imagebook=mysql_result($display,0,'imagepath');
$imagechair=mysql_result($display,1,'imagepath');
$imagelight=mysql_result($display,2,'imagepath');
$imagestorage=mysql_result($display,3,'imagepath');
$imagetable=mysql_result($display,4,'imagepath');

$shoptitle=mysql_result($display,5,'producttitle');
$shopimage=mysql_result($display,5,'imagepath');
$shopbimage=mysql_result($display,5,'description');



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11"><title>NI Hospice Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
</head>
<body id="top">

    <div class="wrapper column1">
  <div id="header">
   
      <div id="logo">
          <a href="index.php"><div class='logo1'><img src='images/logo.png'/></a></div>
      
      </div>
    
    <div id="topnav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="news.php">News</a></li>
        <li class="active"><a href="shop.php">Shop</a>
          <ul>
              <li><a href="products/bookcases.php">Bookcases</a></li>
              <li><a href="products/chairs.php">Chairs</a></li>
              <li><a href="products/lights.php">Lighting</a></li>
              <li><a href="products/storage.php">Storage</a></li>
              <li><a href="products/tables.php">Tables</a></li>
          </ul>
        </li>
        <li class="last"><a href="secure/login.php">Log in</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>


<div class="wrapper col3">
  <div id="container">
    <div class="homepage">
      <ul>
        <li>
            <h2><b><img src="<?php echo "$shopimage" ?>" alt="" style="width: 150px; height: 70px; float:right;"/> <?php echo "$shoptitle" ?></h2></b>
           <br />
          
           <div id="shopselection"><br/>

               <div class="shopbanner"><img src='<?php echo "$shopbimage" ?>' /></div><br/>

               <br />
               <a href='<?php echo "$linkbook" ?>'> <div class="Bookcases">
	<img src='<?php echo "$imagebook" ?>' width='150px' /></div></a>
           
               <a href='<?php echo "$linkchair" ?>'><div class="Chairs">
	<img src='<?php echo "$imagechair" ?>' width='150px' /></div></a>

               <a href='<?php echo "$linklight" ?>'><div class="Lighting">
	<img src='<?php echo "$imagelight" ?>' width='150px' /></div></a>

               <a href='<?php echo "$linkstorage" ?>'><div class="Lighting">
	<img src='<?php echo "$imagestorage" ?>' width='150px' /></div></a>

              <a href='<?php echo "$linktable" ?>'><div class="Table">
	<img src='<?php echo "$imagetable" ?>' width='150px' /></div></a>
  
           </div>
           <br />
          
        </li>
        </ul>
      <br class="clear" />
    </div>
  </div>
</div>

<div class="wrapper col4">
  <div id="footer">
    <div class="box1">
      <h2>Who we are: </h2>
      <img class="imgl" src="images/shop.jpg" alt="" />
      <p>We are the Hospice shop, a charity shop specialising in furniture and home items. We are situated on the Antrim Road in North Belfast. In association with Northern Ireland Hospice, all funds raised are donated to the hospice.</p>
      <p><a href='http://www.nihospicecare.com/donate'>Visit the NI Hospice's website to donate.</a> </p>
    </div>
      
      <!-- Contact Sections  -->
    <div class="box contactdetails">
      <h2>Contact Us:</h2>
      <ul>
        <li>NI Hospice Shop</li>
        <li>461-463 Antrim Road</li>
        <li>Belfast</li>
        <li>BT15 3BJ</li>
        <li>Tel: (028) 90771772</li>
        <li>Email: <a href="mailto:information@nihospice.ord?Subject=HospiceShop: Customer Enquiry" target="_top">information@nihospice.org</a></li>
        
      </ul>
    </div>
      
      <!--Follow us section -->
    <div class="box socialMediaButtonsBox">
      <h2>Follow Us: </h2>
      <div class="wrap">
        <div class="fix"></div>
        <div class="socialMediaButtons" id="Social1"><a href="https://www.facebook.com/barnardos?fref=ts"><img src="images/SocialFbButton.png" alt="" /></a></div>
        <div class="socialMediaButtons" id="Social2"><a href="https://twitter.com/barnardos"><img src="images/SocialTwitterButton.png" alt="" /></a></div>
        <div class="socialMediaButtons" id="Social3"><a href="https://www.youtube.com/user/barnardosuk"><img src="images/SocialYoutubeButton.png" alt="" /></a></div>
        <div class="socialMediaButtons" id="Social4"><a href="https://www.linkedin.com/company/barnardo%27s"><img src="images/SocialLinkedInButton.png" alt="" /></a></div>
        <div class="socialMediaButtons" id="Social5"><a href="https://plus.google.com/+barnardosireland/posts"><img src="images/SocialGooglePlusButton.png" alt="" /></a></div>
        <div class="socialMediaButtons" id="Social6"><a href="http://instagram.com/barnardosretail"><img src="images/SocialInstagramButton.png" alt="" /></a></div>
        <div class="fix"></div>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>

    <!--Copyright section -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="http://www.nihospicecare.com/">NI Hospice</a></p>
    
    <br class="clear" />
  </div>
</div>
</body>
</html>
