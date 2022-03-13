<?php
/*
  I'll be keeping all the functions related to the https://api.mcsrvstat.us/ api
  here, I'll be using them a lot in different files so might as well. Also I don't know
  if the project structure and folder/file names are named and put together right
  since I'm using the naming conventions I've learned with Java.
*/

function isOnline($srvAddress, $srvPort) {
  $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/' . $srvAddress . ":" . $srvPort));
  return $status->online;
}

function getMotd($srvAddress, $srvPort) {
  $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/' . $srvAddress . ":" . $srvPort));
  $srvMotd = "";
  foreach ($status->motd->clean as $motd) {
    $srvMotd .= $motd;
  }
  return $srvMotd;
}
