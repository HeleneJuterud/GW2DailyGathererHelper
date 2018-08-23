<!DOCTYPE html>
<html>
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113563405-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113563405-1');
</script>

	<title>TDA - About this site</title>
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|PT+Serif" rel="stylesheet">
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
       <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>

  <nav>
    <div class="nav-wrapper">
      <a href="http://www.alpharevolver.com" target="_blank" class="brand-logo"> <img class="Logoimg" alt="Logo of Alpha Revolver Gaming Community" src="images/AlphaRevolver_textlogo_black.png" /></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down margin-right-20px">
        <li><a href="about.php">About & contact</a></li>
        <li><a href="index.html">Daily Gatherer Helper</a></li>
        <li><a href="http://www.alpharevolver.com/thedaemonarmy">About TDA & AR <span class="material-icons">open_in_new</span></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="about.php">About & contact</a></li>
        <li><a href="index.html">Daily Gatherer Helper</a></li>
        <li><a href="http://www.alpharevolver.com/thedaemonarmy">About TDA & AR <span class="material-icons">open_in_new</span></a></li>
      </ul>
    </div>
  </nav>

	<header class="col s12 valign-wrapper">
    <div class="row center-align">
        <h1 class="DailyGathererText">About & contact</h1>
    </div>
	</header>
<div class="row">
	<div class="wrapper col s12 m8  offset-m2">
      <h2>About & legal</h2>
      <p>This site is developed for members of The Daemon Army guilds which are part of Alpha Revolver Gaming Community. <br>
      It's purpose is to contain tools and information that might be of use for their members, and for others enjoying the same games. <br><br>
     </p>


			<p>© 2015 ArenaNet, LLC. All rights reserved. NCSOFT, the interlocking NC logo, ArenaNet, Guild Wars, Guild Wars Factions, Guild Wars Nightfall, Guild Wars: Eye of the North, Guild Wars 2, Heart of Thorns, and all associated logos and designs are trademarks or registered trademarks of NCSOFT Corporation. All other trademarks are the property of their respective owners.</p>

      <div class="row">
        <h2>Contact</h2>
        <p>You got any suggestions for improvement? New locations? Questions or feedback?<br> Leave us a message</p>
        <div class="row">
    <form method="post" action="#" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="name" name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="email" class="validate">
          <label for="email" data-error="Please submit a valid email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">format_list_bulleted</i>
      <select name="subject">
      <option value="" selected>Choose your option</option>
      <option value="newLocation">New Location</option>
      <option value="Feedback">Feedback</option>
      <option value="Other">Other</option>
    </select>
    <label>Reason for contact</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">mode_edit</i>
           <textarea id="textarea" name="message" class="materialize-textarea validate"></textarea>
          <label for="textarea">Message</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
        <input type="submit" name="submit">
        </div>
      </div>
    </form>
  </div>
    </div>
	</div>
</div>

<?php
// && $_POST["name"] && $_POST["email"] && $_POST["message"]

$msg = "From " . $_POST["email"] . "\r\n Name: " . $_POST["name"] . "\r\n Message: " .  $_POST["message"];
echo $msg;
  if(isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["email"])){
    mail("tda@helenejuterud.no", $_POST["subject"], $msg);
  }

else
  echo "error";

?>
<script>

  $(document).ready(function() {
    $('select').material_select();
  });

  </script>
       <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
