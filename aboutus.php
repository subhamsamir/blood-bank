<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About us | MahaRaktdaan</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/page.css" rel="stylesheet">
        <link href="css/social.css" rel="stylesheet">
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body>
<?php include('admin/function.php'); ?>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>



<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">
<div class="s_bg">
<div class="wrap">
<div class="">
	<div class="content">
		<img src="Images/about.png" height="70px"  />
			<h4><span class="bold">News Letter from the Founders</span></h4>
			<p><img src="Images/slider5.jpg" height="200px" style="margin-bottom:40px" /></a>'Life Saver' is the first product resulted out of the community welfare initiative called 'Humans Project' from Unisyster Technologies. Universally, 'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. More than 29 million units of blood components are transfused every year. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.</p>
			<p class="top">Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.
We remind every visitor that we have the empowerment to save lives and let’s do that – right now, right here. If you are eligible for blood donation, please register yourself as a blood donor now!</p>
			<p class="top">We also take this opportunity to thank our whole team for all your ideas, commitment and hard-ship in making this dream a reality. We would also like to thank our friends and well-wishers for all your support and encouragement throughout this project. It is now reasonably safe to say that together we have made this society a slightly better and safer place to live.</p>
		<p class="top">Thank you and Happy Blood donating!</p>
        <p class="top"> Subham Samir</p>
<p>Mukul Anand Sharma</p>
<p>Vivek Mishra</p>
        <p class="top">Promoters,</p>
<p>IIMT College of Engineering</p>

	</div>
	<div class="sidebar">
			<div>
<br /><br /><br /><br /><br />
			       <div>
                       <img src="Images/doc.png" width="250px" height="200px" class="tableborder" />
						<br /><br />
                            <img src="Images/camp1.png" width="250px" height="500px" class="tableborder" />

				  </div>

					 <div class="clear"></div>
				</div>
	</div>

</div>
</div>

</form>
</div>


        <div class="clear"></div>
<div>
<div>
<div>
<?php require('footer.php');?>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>


</div>


<?php
if(isset($_POST["sbmt"]))
{

	$cn=makeconnection();

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";


	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{
		echo "<script>alert('Saving Record Failed');</script>";
	}
		}
?>
  <script type="text/javascript">function add_chatinline(){var hccid=63020553;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
</body>
</html>
