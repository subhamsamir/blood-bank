<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Request | MahaRaktdaan</title>

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
</div>

<div class="container">
     <form method="post" enctype="multipart/form-data">
 <table class="table">

 <thead><th colspan="7" align="center"><img src="Images/brequest.png" height="90px" /></th></thead>

<thead >
      <tr class="danger">
        <th>Blood Group</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>Till required date</th>
      </tr> 
       </thead>
	       <tbody>
<?php
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr>
				<td  >$data[6]</td>
				<td  >$data[1]</td>
				<td  >$data[2]</td>
				<td  >$data[3]</td>
				<td  >$data[4]</td>
				<td  >$data[5]</td>
				<td  >$data[7]</td>
				</tr>";
			}
			mysqli_close($cn);
			?>
</tbody>
</form>

</table>          
</div>
	
	<div class="footer">
	<?php require('footer.php');?>
      </div>
</body>
</html>