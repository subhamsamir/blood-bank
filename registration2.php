<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Donar regrestration</title>
<style>
    #success_message{ display: none;}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
<link href="css/page.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/page.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include('admin/function.php'); ?>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
<div > <!--style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;"-->
	
<form method="post" enctype="multipart/form-data" class="form-horizontal" method="post"  id="contact_form">
<br>
<br><br>
<table cellpadding="0" cellspacing="0" style="margin:auto; width:90%; " >

    <tr><td colspan="5"  align="center"><img src="Images/donor.png" width="300px" height="80px"  /></td></tr>
                <td  style=" padding-left:20px;" ><img src="Images/sidebanner.jpg" width="200px" class="shaddow"/> </td>
                    <td style="vertical-align:top;padding-top:20px;">
						
					<fieldset>

              <div class="form-group">
                  <label class="col-md-4 control-label">Donor Name:</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="t1" placeholder="Doner Name" class="form-control"  type="text" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" >
                    </div>
                  </div>
				</div>
				
 <!-- radio checks -->
 <div class="form-group">
                                        <label class="col-md-4 control-label">Gender</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="r1" value="male" /> Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="r1" value="female" /> Female
                                                </label>
                                            </div>
                                        </div>
									</div>
<!-- Text age input-->
									<div class="form-group">
                  <label class="col-md-4 control-label" >Age</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" placeholder="Enter Age" class="form-control"  type="number">
                    </div>
                  </div>
				</div>
		                <!-- Text input-->

								<div class="form-group">
                  <label class="col-md-4 control-label">Mobile number</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." placeholder="(845)555-1212" class="form-control" type="number">
                    </div>
                  </div>
				</div>
				<!-- Select Basic -->
				<div class="form-group">
                  <label class="col-md-4 control-label">Select Blood Group</label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="t4" required class="form-control selectpicker" >
                      <option value=" " >Please select your Blood Group</option>

<!--
<tr><td class="lefttd">Donor Name:</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>

<tr><td class="lefttd">Gender</td><td><input name="r1" type="radio" value="male" checked="checked">Male<input name="r1" type="radio" value="female" >Female</td></tr>
<tr><td class="lefttd">Age</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>

<tr><td class="lefttd">Mobile No</td><td><input type="number" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
<tr><td class="lefttd"> Blood Group </td><td><select name="t4" required><option value="">Select</option>
-->
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
</div>
                </div>
				</div>
				                  <!-- Text input -->
								  <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="t5" required="required"  placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                  </div>
				</div>
					 
				<!-- password input -->
					  <div class="form-group">
                  <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-password"></i></span>
                  <input name="t6" required="required"  placeholder="Password" class="form-control"  type="password" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" />
                    </div>
                  </div>
				</div>
						<!-- password confirm input -->
						<div class="form-group">
                  <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-password"></i></span>
                  <input name="t7" required="required"  placeholder="Password" class="form-control"  type="password" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password" />
                    </div>
                  </div>
				</div>
						<!-- upload input -->
						<div class="form-group">
                  <label class="col-md-4 control-label">upload Pic</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
						<input type="file" name="t8" />
                    </div>
                  </div>
				</div>
								<!-- city input -->
								<div class="form-group">
                  <label class="col-md-4 control-label">City</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
						<input type="text" name="t9" />
                    </div>
                  </div>
				</div>
				      <!-- Text area -->

                <div class="form-group">
                  <label class="col-md-4 control-label"> Address</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<textarea rows="4" cols="50" name="t10" required placeholder="address"></textarea>
                  </div>
                  </div>
				</div>
				<!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>
				     <!-- Button -->
					 <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-4">
				  <input type="submit" value="Register" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; ">
			
                  </div>
                </div>

				</fieldset>
</form>
</div>
		</div>
		</div>
<?php
if(isset($_POST["sbmt"]))
{
$target_dir = "doner_pic/";
$target_file = $target_dir . basename($_FILES["t8"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["t8"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
//allow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t8"]["tmp_name"], $target_file)){
		$cn=makeconnection();
			$s="insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic,city,address) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] .  "','" . $_POST["t7"] .  "','" . basename($_FILES["t8"]["name"])  ."','" . $_POST["t9"] .  "','" . $_POST["t10"] .  "')";

			//$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Record save');</script>";
	}
		} else{
			echo "sorry there was an error uploading your file.";
		}

	}
}
?>
</table>
<section>
<div>
</section>
<section>
<?php require('footer.php');?>
</section>
<script>
                      $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            t1: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your Name'
                    }
                }
            },
             t2: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your Age name'
                    }
                }
            },
            t5: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            t3: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    t3: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            t4: {
                validators: {
                    notEmpty: {
                        message: 'Please select your blood Group'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            t7: {
                validators: {
                      stringLength: {
                        min: 3,
                        max: 32,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'please enter correct password'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


					</script>
</body>
</html>
