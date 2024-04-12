<?php
   $con = mysqli_connect("localhost", "root", "", "my_dc"); 
   if($con == false){

    die("connection Error". mysqli_connect_error());
   }
   ?>