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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">BrainStorming</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Tests</a></li>
        <li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
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
        <source src="na-bgvideo2.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
  
<!--JB Start-->
<div class="container" id="signup-form" style="width:30%; margin: 10vh auto; background:rgba(255,255,255,.75); border-radius:.25em">
  <h1 id="form-title" class="w-100 text-center" style="margin:5vh 0">Start the challege!</h1>
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
        <input type="email" class="form-control text-center" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="password" class="form-control text-center" id="pwd" name="pwd" placeholder="Enter password">
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


</body>
</html>