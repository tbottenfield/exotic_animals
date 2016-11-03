<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Indianola Exotic Animals</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body>

        <?php include '../Resources/navigation.php'; ?>

        <div class="container">
            <div class="below_menu_container">
                <h1><img style="width:50px;" src="img/logo.jpg" alt="website_logo"> Indianola Exotic Animals</h1>
                
                <div class="jumbotron">
                    <h1>Welcome To Indianola Exotic Animals!</h1>
                    <p>Looking for an exotic pet?</p>
                    <p>We sell Crocodiles, Brown Bears, Skunks, Wallabies, Spider Monkeys, Penguins, Zebras, And Many More...!</p>
                    <p><a class="btn btn-lg btn-colored" href="about.php" role="button">Learn more</a></p>
                </div>


<br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/crocodile.jpg" alt="crocodile">
        <div class="carousel-caption">
          <h3>Henry</h3>
          <p>The nile crocodile.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/spidermonkey.jpg" alt="spider monkey">
        <div class="carousel-caption">
          <h3>Hank</h3>
          <p>The black-handed spider monkey.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/zebra.jpg" alt="zebra">
        <div class="carousel-caption">
          <h3>Carmella</h3>
          <p>The plains zebra.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/bear.jpg" alt="brown bear">
        <div class="carousel-caption">
          <h3>Tommy</h3>
          <p>The brown bear.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/penguin.jpg" alt="penguin">
        <div class="carousel-caption">
          <h3>Flipper</h3>
          <p>The king penguin.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/spidermonkey.jpg" alt="spider monkey">
        <div class="carousel-caption">
          <h3>Sandra</h3>
          <p>The black-handed spider monkey.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


            </div>
        </div>
        
        <?php include '../Resources/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>