<?php

  require '../mcsrv/McSrvStatus.php';
  $address = "Empty";
  $port = "Empty";

  if (strlen($_GET["address"]) >= 3 || strlen($_GET["port"]) >= 3) {
    $address = $_GET["address"];
    $port = $_GET["port"];

    if (isOnline($address, $port) == 1) {

      if (strpos(getMotd($address, $port), 'ZeroBoot Target Server') !== false) {

      } else {
        dangerMessage("You can not attack this server.");
        showCancellationImage();
      }

    } else {
      dangerMessage("This server is currently not online.");
      showCancellationImage();
    }

  } else {
    dangerMessage("You have not submitted a valid server address and or port.");
    showCancellationImage();
  }

  // It uses bootstrap because again I hate CSS
  function dangerMessage($message) {
    echo
    "
    <div class=\"alert alert-danger\" role=\"alert\">
      <center>
        $message
      </center>
    </div>
    ";
  }

  // This is just a temporary filler for the page so it doesn't look so empty, even tho it is pretty ugly
  function showCancellationImage() {
    echo
    "
    <center>
      <h4>
        I plan on making this look pretty like <a href=\"https://github.com/404\">Github's 404</a> page with some cute monster dancing or something but for now I'll just leave this gif here. Maybe I can get a front end dev to make something for me!
      </h4>
    </center>
    <hr>
    ";
    echo "<center> <img src=\"https://media1.tenor.com/images/968706fd239c6d018cc3506986291520/tenor.gif\" width=\"400\" height=\"400\"> </center>";
  }

  // TODO Make method to check the validity of the server address and port

?>
