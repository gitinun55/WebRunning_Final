<?php
 session_start();

  echo "Logout Successfully ";
  unset ($_SESSION['user_admin']);
  session_destroy();   // function that Destroys Session 
  header("Location: main.html");
?>