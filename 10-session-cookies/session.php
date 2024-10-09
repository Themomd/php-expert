<?php

session_start();

// set session
$_SESSION["userName"] = "Mohammad";
$_SESSION["userEmail"] = "The_momd@proton.me";
echo $_SESSION["userName"] . "<br>";
echo $_SESSION["userEmail"];
 
// ifyou want to delete the session you have to use this:
  //  session_unset();
  //  echo $_SESSION["userName"] . "<br>";
  //  echo $_SESSION["userEmail"];

// and to be 100% sure use this one:
    // session_destroy();
    //  echo $_SESSION["userName"] . "<br>";
    //  echo $_SESSION["userEmail"];

