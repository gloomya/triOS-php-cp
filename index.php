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
      <ul class="nav navbar-nav navbar-right">
<!-- Changes from rous: navigation login  11-05-2019-->
            <li style="margin:1em 0.1em;"><input type="email" class="form-control" id="email" placeholder="email"></li>
            <li style="margin:1em 0.1em;"><input type="password" class="form-control" id="pwd" placeholder="password"></li>
            <li class="align-by-margin"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<!-- Changes from rous: navigation login Ends-->

      </ul>
    </div>
  </div>
</nav>

<!-- By Nabil start 11-05-2019-->
    <video autoplay muted loop id="myVideo">
        <source src="na-bgvideo3.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
<!-- By Nabil end 11-05-2019-->
  
<!--JB Start-->
<div class="container" id="signup-form" style="width:30%; margin: 10vh auto; background:rgba(255,255,255,.75); border-radius:.25em">
  <h1 id="form-title" class="w-100 text-center" style="margin:5vh 0">Start the challenge!</h1>
  <hr>
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
        <input type="email" class="form-control text-center" id="email" name="email" placeholder="Email Address">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="password" class="form-control text-center" id="pwd" name="pwd" placeholder="Password">
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
<!--JB End-->


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


</body>
</html>