<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Indianola Exotic Animals - Hours</title>
      
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body>
    
        <?php include '../resources/navigation.php'; ?>

        <div class="container">
            <div class="below_menu_container">
                <h1><img style="width:50px;" src="img/logo.jpg" alt="website_logo"> Indianola Exotic Animals</h1>

                <h2>Hours and Directions</h2>
                <p>Address: 1234 West 4th Ave, Indianola, IA 50125 <br>Located Next To The Dollar General</p>

<div id="map" style="width:400px;height:400px;padding-top:15px;"></div>
<div id="map" style="padding-bottom:30px;"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(41.355227, -93.583849);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 13};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

                <table>
                    <tr>
                        <td> Monday - Friday</td>
                        <td> 12:00 p.m. - 5:00 p.m.</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 10px;"> Saturday - Sunday</td>
                        <td> 10:00 a.m. - 2:00 p.m.</td>
                    </tr>
                </table>
    
            </div>
        </div>
        
        <?php include '../resources/footer.php'; ?>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

      
