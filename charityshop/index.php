<?php

include('connect.php');

$query = "SELECT * FROM P1HomeContent";

//send SQL statement to MySQL server
$display = mysql_query($query) or die(mysql_error());

//Slide 1 variables
$title1=mysql_result($display,0,'titledata');
$content1=mysql_result($display,0,'contentdata');
$image1=mysql_result($display,0,'imagepath');
$content2 = nl2br($content1);
strip_tags($content1);
//Slide 2 variables
$title2=mysql_result($display,1,'titledata');
$content2=mysql_result($display,1,'contentdata');
$image2=mysql_result($display,1,'imagepath');
$content2 = nl2br($content2);
strip_tags($content2);
//Slide 3 variables
$title3=mysql_result($display,2,'titledata');
$content3=mysql_result($display,2,'contentdata');
$image3=mysql_result($display,2,'imagepath');
$content3 = nl2br($content3);
strip_tags($content3);
//Large image variable
$image4=mysql_result($display,3,'imagepath');
//Using row 3 title & content fields to store slide 1 & 2 button tiles:
$button1=mysql_result($display,3,'titledata');
$button2=mysql_result($display,3,'contentdata');

$content1 = nl2br($content1);
$content2 = nl2br($content2);
$content3 = nl2br($content3);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>NI Hospice Shop</title>
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
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="shop.php">Shop</a>
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

<div class="wrapper col2">
  <div id="featured_slide">
    <div id="featured_content"> 
      <ul>
        <li><img src="<?php echo "$image1" ?>" alt="" />
          <div class="floater">
            <h2><?php echo "$title1" ?></h2>
            <br /><p><?php echo "$content1" ?><br/> 
                <br /><a href="http://www.os-templates.com/">Visit the NI Hospice's site</a>.</p>
            
          </div>
        </li>
          <li>
              <img src="<?php echo "$image2" ?>" alt="" />
          <div class="floater">
              <h2><?php echo "$title2"?></h2>
            <p><?php echo "$content2" ?></p>
            <p class="readmore"><a href="about.php"><?php echo "$button1" ?> &raquo;</a></p>
          </div>
        </li>
        <li><img src="<?php echo "$image3" ?>" alt="" />
          <div class="floater">
            <h2><?php echo "$title3" ?></h2><br/>
            <p><?php echo "$content3" ?></p>
            <p class="readmore"><a href="shop.php"><?php echo "$button2" ?> &raquo;</a></p>
          </div>
        </li>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a> </div>
</div>

<div class="wrapper col3">
  <div id="container">
    <div class="homepage">
      <ul>
        <li>

           
          <div id='imagebanner'><img src=' <?php echo "$image4" ?>' style="width:850px; height:450px;"/></div>
           

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
