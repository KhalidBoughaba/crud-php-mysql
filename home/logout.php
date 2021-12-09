<?php
session_start();
print_r('fffffffff');
session_destroy();
print_r($_SESSION);
   header("location:../");
?>