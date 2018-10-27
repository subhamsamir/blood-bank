<style>
  nav {
  margin-top: 0px;
  box-shadow: 5px 4px 5px #000;
}
</style>            
<!-- bootstrap-->
            <div class="body-wrap">
  <div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Maharaktdaan</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="registration.php">Donor Registration</a></li>
            <li><a href="requests.php">Send Request</a></li>
            <li><a href="viewrequest.php">View Request</a></li>
           <li><a href="camps.php">Camps</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="contact.php">Contact Us</a></li>
           	<li><a href="aboutus.php">About</a></li>
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            -->
          </ul>

          <ul class="nav navbar-nav navbar-right">
           <!-- <li><a href="#">Link</a></li>-->
          </ul>
        </div>
        <script>
        $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
        </script>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
</div>
<!--data to recover in main
<ul class="nav">
			<li class="active"><a href="index.php">Home</a></li>	
			<li><a href="registration.php">Donor Registration</a></li>            
			<li><a href="requests.php">send Request</a></li>
            <li><a href="viewrequest.php">View Request</a></li>
           <li><a href="camps.php">Camps</a></li> 
            <li><a href="login.php">log In</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="contact.php">Contact Us</a></li>
           	<li><a href="aboutus.php">About</a></li>
            </ul>
            -->