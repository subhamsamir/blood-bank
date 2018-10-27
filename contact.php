<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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

<body>
<?php include('admin/function.php'); ?>
        <?php require('header.php');?>
        <br><br><br>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-danger" >
                            <div class="panel-heading">
                                <h4>Contact Us</h4>
</div>
                                <p class="text-warning"><i>Drop a mail We will Contact you sooner</i><p>
     <form method="post" enctype="multipart/form-data">
     <div class="panel-body">
     <div class="form-group">
 Name:<input type="text" class="form-control" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" />
</div>
<div class="form-group">
 E-Mail<input type="email" class="form-control"  name="t2" required="required" />
</div>
<div class="form-group">
Mobile No<input type="number" name="t3" class="form-control"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." />
</div>
Subject<textarea name="t4" class="form-control" ></textarea>
<input type="submit" value="Send Us" name="sbmt" class="btn btn-danger">

</div>
</div>

          </div>
</form>
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
	{echo "<script>alert('Saving Record Failed');</script>";
	}

		}


?>

        <footer>
         <?php require('footer.php');?>
</footer>

</body>
</html>
