<html>
    <head>
 <title></title>
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
	<?php require('header.php');?>
            <div class="container">
<br>
<br>
<br>
<img src="Images/brequest.png" height="90px" />
                    <form enctype="multipart/form-data" class="form-horizontal" method="post"  id="contact_form">
                <fieldset>

                <!-- Form Name -->
                <legend class="w3-text-red">Contact Us Today!</legend>

                <!-- Text input-->

                <div class="form-group">
                  <label class="col-md-4 control-label">Name</label>
                  <div class="col-md-4 inputGroupContainer">
                  <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input  name="t1" placeholder="First Name" class="form-control"  type="text" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" >
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

				                <!-- Text input-->

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

                <!-- Text input
                       <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
                    </div>
                  </div>
                </div>
                -->

				 <!-- Select Basic -->

				 <div class="form-group">
                  <label class="col-md-4 control-label">Select Blood Group</label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="t4" required class="form-control selectpicker" >
                      <option value=" " >Please select your Blood Group</option>
					  <?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[1]==$_POST["s2"])
		{
			echo "<option value=$data[1] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[1]>$data[1]</option>";
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

			   				 <!-- Select Basic -->

				 <div class="form-group">
                  <label class="col-md-4 control-label">Till Required Date</label>
                    <div class="col-md-4 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="month" required class="form-control selectpicker" >
					  <option value="1">JAN</option>
<option value="2">FEB</option>
<option value="1">MARCH</option>
<option value="1">APRIL</option>
<option value="1">MAY</option>
<option value="1">JUNE</option>
<option value="1">JULY</option>
<option value="1">AUG</option>
<option value="1">SEPT</option>
<option value="1">OCT</option>
<option value="1">NOV</option>
<option value="1">DEC</option>
</select>
<select name="day" required class="form-control selectpicker" >
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<input type="text" name="year" style=" width:50px"  /></td></tr>
                  </div>
                </div>
                </div>

                <!-- Text input

                <div class="form-group">
                  <label class="col-md-4 control-label">Detail</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
						<textarea name="t7"></textarea>
					</div>
                  </div>
                </div>
                -->
                <!-- Text area -->

                <div class="form-group">
                  <label class="col-md-4 control-label"> Description</label>
                    <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="t7" placeholder="Project Description"></textarea>
                  </div>
                  </div>
                </div>

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-danger" name="sbmt" >Send <span class="glyphicon glyphicon-send"></span></button>
                  </div>
                </div>

                </fieldset>
                </form>
                </div>
					</div><!-- /.container -->
					<?php require('footer.php');?>
					<?php
if(isset($_POST["sbmt"]))
{


	$cn=makeconnection();
		$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
			$s="insert into requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";


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
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
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

<script src="js/bootstrap.js" type="text/javascript" ></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/bootstrap-3.3.7.js" type="text/javascript"></script>
    </body>
</html>
