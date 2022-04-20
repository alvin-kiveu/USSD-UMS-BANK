<?php
  $host="localhost";
  $user= "umeskias_umeskia_user";
  $pass ="1qbejxBr%blT";
  $db = "umeskias_umskiasoftwares";
  $connect = mysqli_connect($host,$user,$pass,$db);
  if(!$connect){
      echo "DATABASE CONECTION ERROR";
  }