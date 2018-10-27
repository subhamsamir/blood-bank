<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/page.css" rel="stylesheet" type="text/css">
<link href="css/social.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include('admin/function.php'); ?>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
<div style="height:300px; width:1000px; margin:auto; marg
in-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"><img src="Images/brequest.png" height="90px" /></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:red"  >Blood Group</td><td align="center">Name</td><td align="center">Gender</td><td align="center">Age</td><td align="center">Mobile No</td><td align="center">Email</td>
            <td align="center">Till Required Date</td>
        </tr>
<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[6]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td><td  style=' padding-left:60px'>$data[7]</td></tr>";
			}
			mysqli_close($cn);
			?>
</table>
</form>
        </div>
        </div>
	<?php require('footer.php');?>
		</div>
</body>
</html>