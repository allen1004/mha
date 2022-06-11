<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ./adm/LG_010.php");
   }
?>
