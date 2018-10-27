<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Find a route using Geolocation and Google Maps API</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/page.css" rel="stylesheet">
        <link href="css/social.css" rel="stylesheet">
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyBRwwykOiImEFTz6jq3yUAO2KT45QNufyo"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
      function calculateRoute(from, to) {
        // Center initialized to Naples, Italy
        var myOptions = {
          zoom: 6,
          center: new google.maps.LatLng(40.84, 14.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);

        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
          origin: from,
          destination: to,
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: mapObject,
                directions: response
              });
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );
      }

      $(document).ready(function() {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
        }

        $("#from-link, #to-link").click(function(event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));

          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK)
                $("#" + addressId).val(results[0].formatted_address);
              else
                $("#error").append("Unable to retrieve your address<br />");
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });

        $("#calculate-route").submit(function(event) {
          event.preventDefault();
          calculateRoute($("#from").val(), $("#to").val());
        });
      });
    </script>
    <style type="text/css">
      #map {
        width: 600px;
        height: 450px;
        margin-top: 10px;
      }
    </style>
  </head>
  <div id="content">
  

  <body style=" position: relative;
  margin: 0;
  padding:0;
  min-height: 500px;
  margin-bottom:-50px;">
  <?php require('header.php');?>
  <div class="container-fluid">
  <div style="position: absolute;left:3%;top:15%;">
  <?php include('Admin/function.php'); ?>
     
    <!--<%
     String to=request.getParameter("to"); 
     %>-->
     
    <h1><u>Calculate your route</u></h1>
    <form id="calculate-route" name="calculate-route" action="loc.jsp" method="get">
      <table>
      <tr>
      <td>
      <label for="from">From:</label>
      </td>
      <td>
      <input type="text" id="from" name="from" required="required" placeholder="An address" size="30" />
      <a id="from-link" href="#">Get my position</a>
      </td>
      </tr>
      <br>
	<tr>
     <td> <label for="to">To:</label></td>
      <td><input type="text" id="to" name="to" required="required" placeholder="Another address" size="30" value="<?php echo $_GET['address'];?>"/>
   <?php
    // echo $_GET['address'];
?>
    </td>
      </tr>
<tr><td>
      <input type="submit" value="submit">
      </td>
      <td>
      <input type="reset" />
      </td>
      </tr>
      </table>
    </form></div>
    <div style="position: absolute;left:45%;top:10%;">
    <div id="map"></div>
    <p id="error"></p></div>
    </div>

           <!--<div style=" position:absolute;bottom:0;width:100%">-->
           <div style=" position: absolute;
   right: 0;
   bottom:0;
   left: 0;
   padding:0;
   background-color:#333;
   width:100%;
   height:50px;
   margin-bottom:0px;">
         <?php require('footer.php');?>
</div>
</div>
  </body>

  
  <script type="text/javascript">function add_chatinline(){var hccid=63020553;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script>
</html>