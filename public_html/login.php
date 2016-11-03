<!DOCTYPE html> 
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title> Indianola Exotic Animals - Log In </title>
    
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

                <h2>Login</h2>

                <form class="boxed-form">
				  <div class="form-group">
				    <label for="inputEmail3">Email</label>
				    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3">Password</label>
				    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				  </div>
				  <div class="checkbox">
				    <label>
				    <input type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-colored">Login</button>
				</form>

		    </div>
        </div>
        
        <?php include '../Resources/footer.php'; ?>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

