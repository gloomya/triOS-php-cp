<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
    * {
    box-sizing: border-box;
    }

    body {
    margin: 0;
    }

    #myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    z-index: -1;
    }
</style>
</head>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BrainStorming</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Tests</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
<!-- Changes from rous: navigation login  11-05-2019-->
            <li style="margin:1em 0.1em;"><input type="email" class="form-control" id="email" placeholder="email"></li>
            <li style="margin:1em 0.1em;"><input type="password" class="form-control" id="pwd" placeholder="password"></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<!-- Changes from rous: navigation login Ends-->

      </ul>
    </div>
  </div>
</nav>

    <video autoplay muted loop id="myVideo">
        <source src="na-bgvideo.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
  
<!--JB Start-->
<div class="container" id="jb-signup-form" style="width:50%; margin: 10vh auto;">
  <h1 id="jb-form-title" class="w-100 text-center" style="margin:5vh">Sign up!</h1>
  <form class="form-horizontal" action="#" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="jb-fname">First Name</label>
      <div class="col-sm-10">
        <input type="input" class="form-control" id="jb-fname" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jb-lname">Last Name</label>
      <div class="col-sm-10">
        <input type="input" class="form-control" id="jb-lname" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jb-email">Email Address</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="jb-email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jb-pwd">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="jb-pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary btn-block" style="background:gold; color:black; border:none;">Submit</button>
      </div>
    </div>
  </form>
</div>
<!--JB End-->


<!-- RE Footer -->
<div class="container" style="height: 7rem; position: fixed; bottom:0; width: 100%; background: whitesmoke; border-top: 1px solid black">
    <div class="row" style="padding: 1em; text-align:center">
      <div class="col-md-3" style="margin: auto;">
        <img style="height:30px; width:auto; margin: 1em auto;" src="https://img.icons8.com/ios-filled/50/000000/education.png">
        <img style="height:30px; width:auto; margin: 1em auto;" src="https://img.icons8.com/nolan/50/000000/html-filetype.png">
        <img style="height:30px; width:auto; margin: 1em auto;" src="https://img.icons8.com/nolan/50/000000/css-filetype.png">
        <img style="height:30px; width:auto; margin: 1em auto;" src="https://img.icons8.com/ios-filled/50/000000/javascript-logo.png">
      </div>
      <div class="col-md-6"  style="margin: 1em auto;"> <strong>ALL RIGHTS RESERVED | BRAINSTORMING™ | <i>PHP2019</i> </strong></div>
      <div class="col-md-3"  style="margin: 1em auto;"><a href="https://icons8.com/icon/40569/education">Education icon by Icons8</a></div>
    </div>
</div>
<!-- RE FOOTER END -->


</body>
</html>