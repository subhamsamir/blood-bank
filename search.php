<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | MahaRaktdaan</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/page.css" rel="stylesheet">
        <link href="css/social.css" rel="stylesheet">
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	</head>
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('Admin/function.php'); ?>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
<div style="height:350px;">
<center>
<div class="container-fluid">
     <form method="post" enctype="multipart/form-data">
   <table>
         <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2" align="center"><img src="Images/search.png" height="80px" /></td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
		<tr><td class="lefttd" style="padding-left:40px">Select Blood Group </td>
		<td>
			<select name="s2" required><option value="">Select</option>
	</div>
	</center>
<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
	}
    mysqli_close($cn);
    

?>
</select>

<tr><td class="lefttd" style="padding-left:40px">Select city </td>
<td>
			<select name="s3" required><option value="">Select</option>
	</div>
	</center>
    
    
<?php
$cn=makeconnection();
$s="select * from donarregistration";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s3"])
		{
			echo "<option value=$data[0] selected>$data[10]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[10]</option>";
		}
	}
    mysqli_close($cn);
    

?>
</select>
</tr>
</td></tr>
  <tr><td colspan="2">&nbsp;
            </td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td>&nbsp;</td><td>       
<tr><td>&nbsp;</td><td><input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>

                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>		
</form>
</div>
</div>

<?php 
if(isset($_POST["sbmt"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["s2"]."');</script>";
}

?>
      	</div>
	<?php require('footer.php');?>
</div>
</body>
</html>