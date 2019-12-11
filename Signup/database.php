<?php session_start(); ?>
<!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     $servername = "localhost";
     $username = "root";
     $password = "dweepacomp";
     $dbname = "Members";
     $c = mysqli_connect($servername,$username,$password,$dbname);
     if($c)
     {
       $q = "SELECT * FROM Information";
       $res = mysqli_query($c,$q);
       while(($val = mysqli_fetch_assoc($res))!=NULL)
       {
         if(($val["EMAIL"] == $_GET["email"]) && ($val["PASSWORD"] == $_GET["pass"]))
           {
             $check = "TRUE";
             break;
           }
         else
         {
           $check = "FALSE";
         }
       }
     if($check == "TRUE")
       {
         $_SESSION["email"]=$val["EMAIL"];
         header ("Location: homelogin.php");
       }
     else {
       echo "Enter the correct Email/password or try again!";
       header ("Location: login.php");
     //  echo $val["Name"];
      }
     }
?>
   </body>
 </html>
