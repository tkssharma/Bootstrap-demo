<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/ic_launcher.png">

    <title>Jquery Learning</title>

     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   	<link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <!-- Static navbar -->
	
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Jquery Project</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          
        </div><!--/.nav-collapse -->
     
    </nav>
	</div>


  <div class='container'>
    <div class='row well well-lg'>
      <div class='col-md-6'>
        <h2>javascript + Jquery</h2>
        <p class='lead'>Make your way to space in our rocket, elevator or transporter for Jquery</p>
        <button type='button' class='btn btn-lg btn-default'>Take the Tour</button>
        <button type='button' class='btn btn-lg btn-primary'>Book Training</button>
      </div>
      <div class='col-md-6 visible-md visible-lg'>
        <img src='images/right-bg.jpg' alt='Blast off with Bootstrap' />
      </div>
    </div>

    <div class='row text-center features'>
      <div class='col-sm-4 col-xs-10 col-xs-offset-1 col-sm-offset-0'>
        <i class='glyphicon glyphicon-briefcase '></i>
        <h3>Book Today!</h3>
        <p>Even if you're traveling tomorrow, you can still get tickets today. We have a number of conveniently located ports around the globe to service everyone.</p>
      </div>

      <div class='col-sm-4 col-xs-6'>
        <i class='glyphicon glyphicon-random'></i>
        <h3>Go Anywhere</h3>
        <p>If you need to get to space today, why not try out a transporter? Despite the claims, there are have been no deaths in the last 6 weeks!</p>
      </div>

      <div class='col-sm-4 col-xs-6'>
        <i class='glyphicon glyphicon-send'></i>
        <h3>RocketBus&reg;</h3>
        <p>For cheapest fares, catch the next RocketBus&reg; to the stars. Cheaper on your wallet, and easiest way to make friends.</p>
      </div>
    </div>
  </div>

    <div class='container'>
	<ul id="myTab" class="nav nav-tabs">
  <li role="presentation" class="active"><a data-toggle="tab" href="#">class01</a></li>
  
  <li role="presentation"><a data-toggle="tab" href="#home">class02</a></li>
  <li role="presentation"><a data-toggle="tab" href="#">class03</a></li>
  <li role="presentation" ><a data-toggle="tab" href="#">class04</a></li>
  <li role="presentation"><a data-toggle="tab" href="#">class05</a></li>
  <li role="presentation"><a data-toggle="tab" href="#">class06</a></li>
  <li role="presentation" ><a data-toggle="tab" href="#">class07</a></li>
  <li role="presentation"><a data-toggle="tab" href="#">class08</a></li>
  <li role="presentation"><a data-toggle="tab" href="#">class09</a></li>
  </ul>
  <div id="dfs" class="tab-content">
   <div class="tab-pane fade in active" id="home">
      <div class='row well '>
      <div class='col-md-12'>
        <h2>javascript + Jquery</h2>
        <p class='lead'>Make your way to space in our rocket, elevator or transporter for Jquery</p>
        <button type='button' class='btn btn-lg btn-default'>Take the Tour</button>
        <button type='button' class='btn btn-lg btn-primary'>Book Training</button>
      </div>
      
    </div>
   </div>
   
</div>

	</div>
  
  
  
  
  
  <div class='footer'>
	<div class='container'>
		 <div class='col-sm-4 col-md-3 col-xs-6'>
        <h4>Who We Are</h4>
        <p><i>Blasting Off With Bootstrap</i> is the fastest way to space. <a href='#'>Book your ticket today</a>!</p>
        <p><a href='#'>More About Us <i class='glyphicon glyphicon-arrow-right'></i></a></p>
      </div>

      <div class='col-sm-2 col-xs-6 col-md-offset-1'>
        <h4>Links</h4>
        <ul class='list-unstyled'>
          <li><a href='#'>Home</a></li>
          <li><a href='#'>Tickets</a></li>
          <li><a href='#'>Stations</a></li>
        </ul>
      </div>

      <div class='clearfix visible-xs'></div>

      <div class='col-sm-2 col-xs-6'>
        <h4>Stay in Touch</h4>
        <ul class='list-unstyled'>
          <li><a href='#'>About</a></li>
          <li><a href='#'>Contact Us</a></li>
          <li><a href='#'>Blog</a></li>
          <li><a href='#'>Twitter</a></li>
          <li><a href='#'>Facebook</a></li>
        </ul>
      </div>

      <div class='col-sm-4 col-md-3 col-md-offset-1 col-xs-6'>
        <h4>Contact Us</h4>
        <ul class='list-unstyled'>
          <li><i class='glyphicon glyphicon-globe'></i> Orlando, FL<li>
          <li><i class='glyphicon glyphicon-phone'></i> 1-555-blast-off<li>
          <li><i class='glyphicon glyphicon-envelope'></i> <a href='mailto:#'>blastingoff@codeschool.com</a><li>
        </ul>

        <p>Blasting Off With Bootstrap &copy;2214.</p>
      </div>
  
		</div>
	</div>
  
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
   
	
  </body>
</html>
