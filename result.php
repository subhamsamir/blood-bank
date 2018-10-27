<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
    <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
<link href="css/page.css" rel="stylesheet" type="text/css">

  
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
<div style=" height:auto">

     <form method="post" enctype="multipart/form-data">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>            
            <td>
  <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        <tr><td  align="center"><img src="Images/results.png" height="80px" style="padding-top:20px" /></td></tr>
        <tr><td >&nbsp;</td></tr> 
          
            <?php
$cn=makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
  <tr><td >

            <table cellpadding="0"  cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">
                <tr><td width="100px"  align="center" style="vertical-align:middle">

  <img src="doner_pic/<?php echo $data[8] ?>" height="100px" width="100px" style="margin:auto; padding-left:70px; padding-right:50px; float:left" /></a></td>
                    <td width="400px" height="50px" style="vertical-align:top">
                        <table cellpadding="0" width="400px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[1]; ?></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title">Gender</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Mobile No:</span></td><td><?php echo $data[4]; ?></td></tr>
                  <tr><td><span class="title">Email</span></td><td><?php echo $data[6]; ?></td></tr>
        <tr><td><span class="title">Blood Group</span></td><td><?php echo $data[12]; ?></td></tr>
                   <tr><td><span class="title">City</span></td><td><?php echo $data[10]; ?></td></tr>
                 
                 <tr><td><span class="title">Address</span></td><td><?php echo $data[9]; ?></td><td>
                
                <?php
                $address = $data[9];
                //echo "<script>location.replace('geo_loc.php?bg=". $_POST["s2"]."');</script>";
                //echo '  <a href="geo_loc.php?address='.$data[9].'">show'.$address.'</a>'; 
                echo '  <a href="geo_loc.php?address='.$data[9].'">navigate</a>'; 
                 ?>    
                     <tr><td> </td></tr>
                    
                      </table>
                    </td></tr></table></td></tr>
               
   <?php }
   ?>

           </table></td></tr></table></form>


		
</form>
</div>
</div>
       
		




</body>
</html>