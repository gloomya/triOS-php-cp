<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>


<body>

<nav class="navbar navbar-inverse mk-navbar-custom">
  <div class="container-fluid mk-container-fluid-custom">
    <div class="navbar-header">
      <a class="navbar-brand align-by-margin" href="#">BrainStorming</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav align-by-margin">
        <li><a href="./tests.php">Tests</a></li>
        <li><a href="./about.php">About</a></li>
		<li><a href="./contact.php">Contact</a></li>
      </ul>

    </div>
  </div>
</nav>

<!--Nabil Start-->  
<div class="container" id="signup-form" style="width:100%; margin: 10vh auto; background:rgba(255,255,255,.75); border-radius:.25em">
    <div class="row">
        <div class="col-sm-12 col-md-6">
        <h1 id="form-title" class="w-100 text-center" style="margin:5vh 0">Contact Us!</h1>

  <form class="form-horizontal" action="#" method="POST">
    <div class="form-group">
      <div class="col-sm-12">
        <input type="input" class="form-control text-center" id="fname" name="fname" placeholder="First name">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="input" class="form-control text-center" id="lname" name="lname" placeholder="Last name">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="email" class="form-control text-center" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="password" class="form-control text-center" id="pwd" name="pwd" placeholder="Enter phone number">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <textarea type="text" class="form-control text-center" id="message" name="msg" placeholder="Enter message"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  </form>
        </div>

        <div class="col-sm-12 col-md-6">
        <div id="googleMap" style="width:100%;height:400px; backgroun-color: orangred;"></div>
        </div>

    </div>
</div>
<!--Nabil End-->


<!-- RE Footer -->
<div class="container" style="height: 7rem; position: fixed; bottom:0; width: 100%; background: whitesmoke; border-top: 1px solid black">
    <div class="row" style="padding: 1em; text-align:center">
      <div class="col-sm-3" style="margin: auto;">
        <img style="height:25px; width:auto; margin: 1em 0.5em;" src="https://img.icons8.com/nolan/50/000000/html-filetype.png">
        <img style="height:25px; width:auto; margin: 1em 0.5em;" src="https://img.icons8.com/nolan/50/000000/css-filetype.png">
        <img style="height:25px; width:auto; margin: 1em 0.5em;" src="https://img.icons8.com/ios-filled/50/000000/javascript-logo.png">
        <img style="height:25px; width:auto; margin: 1em 0.5em;" src="https://img.icons8.com/ios/50/000000/php-server.png">
        <a href="https://icons8.com/icon/40569/education"></a>
        <!-- Icons by Icons8 -->
      </div>

      <div class="col-sm-6"  style="margin: 1em auto;"> <strong>© 2019 TRIOS STUDENTS | BRAINSTORMING™ | <i>PHP2019</i> </strong></div>

      <div class="col-sm-3"  style="margin:auto;">
        <img style="height:30px; width:auto; margin: 0.8em 1.5em;" src="https://img.icons8.com/plasticine/100/000000/facebook-new.png">
        <img style="height:30px; width:auto; margin: 0.8em 1.5em;" src="https://img.icons8.com/cotton/64/000000/twitter.png">
        <img style="height:30px; width:auto; margin: 0.8em 1.5em;" src="https://img.icons8.com/dusk/64/000000/instagram-new.png">
      </div>

    </div>
</div>
<!-- RE FOOTER END -->

<script src="main.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV6hm1DZtp7v41wY9CadqZXvWHJkzlJPM&callback=myMap"></script>
</body>
</html>