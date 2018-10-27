<?php
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Campus | Maharaktdaan</title>
        <link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/page.css" rel="stylesheet" type="text/css">
<link href="css/social.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/custom_made.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body, html{
  height:100%;
  margin:0;
  font-size:16px;
  font-family:"Lato", sans-serif;
  font-weight:400;
  line-height:1.8em;
  color:#666;
}

.pimg1, .pimg2, .pimg3{
  position:relative;
  opacity:0.80;
  background-position:center;
  background-size:cover;
  background-repeat:no-repeat;

  /*
    fixed = parallax
    scroll = normal
  */
  background-attachment:fixed;
}

.pimg1{
  background-image:url('img/Banner1.png');
  min-height:100%;
}

.pimg2{
  background-image:url('img/iimt.jpg');
  min-height:400px;
}

.pimg3{
  background-image:url('img/galgotias.jpg');
  min-height:400px;
}

.section{
  text-align:center;
  padding:50px 80px;
}

.section-light{
  background-color:#f4f4f4;
  color:#666;
}

.section-dark{
  background-color:#282e34;
  color:#ddd;
}

.ptext{
  position:absolute;
  top:50%;
  width:100%;
  text-align:center;
  color:#000;
  font-size:27px;
  letter-spacing:8px;
  text-transform:uppercase;
}

.ptext .border{
  background-color:#111;
  color:#fff;
  padding:20px;
}

.ptext .border.trans{
  background-color:transparent;
}

@media(max-width:568px){
  .pimg1, .pimg2, .pimg3{
    background-attachment:scroll;
  }
}
    </style>

    </head>

    <body>
    <?php require('header.php');?>
    <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Campus
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Campus One : IIMT Greater Noida</h2>
    <div class="row">
  <div class="col-md-3 col-sm-1">
  <div class="container_image">
        <img class="custom_image_div" src="images/3.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>

  	<div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/1.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>

            <div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/3.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>
            
            <div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/1.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
  	      </div>

  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Image Two Text
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Campus Two: galgotias university</h2>
    <div class="row">
  <div class="col-md-3 col-sm-1">
  <div class="container_image">
        <img class="custom_image_div" src="images/3.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>

  	<div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/1.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>

            <div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/3.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>
            
            <div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/1.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
  	      </div>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        Image Three Text
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>Campus Three: Sharda university</h2>
    <div class="row">
  <div class="col-md-3 col-sm-1">
  <div class="container_image">
        <img class="custom_image_div" src="images/3.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>

  	<div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/1.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>

            <div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/3.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
            </div>
            
            <div class="col-md-3 col-sm-1">
  	<div class="container_image">
        <img class="custom_image_div" src="images/1.jpg" alt="" />
        <div class="overlay"></div>
        <div class="button"><a href="#"> view </a></div>
      </div>
  	      </div>
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        More are Coming :)
      </span>
    </div>
  </div>

  	</div>
	<?php require('footer.php');?>

		</div>
</body>
<script type="text/javascript">function add_chatinline(){var hccid=63020553;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
</html>