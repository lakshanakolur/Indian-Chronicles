<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Work+Sans" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../stylesheets/login.css">
<style>
*
{
  
background: #c76766;
    
}
input
{
background:#ccdfcb;
opacity:1;
}
input:hover
{
background:#ccdfcb;
}
form{
    background:#031424;
}
</style>
  </head>
  <body>

    <form action="database.php" method="get" target="_self">
      <input type="text" name="email" placeholder="example_name@example.com" ><br>
      <input type="password" name="pass" placeholder="Password"><br>
      <input type="submit" value="Log me in!">
    </form>
    <?php
      if (in_array("email",array_keys($_GET))) {
      $servername = "localhost";
      $username = "root";
      $password = "dweepacomp";
      $dbname = "userDatabase";
      $c = mysqli_connect($servername,$username,$password);//forth parameter is when you what to connect to only one database
      if($c)
      {
        $q = "CREATE DATABASE Members"; // will just create a querry
        mysqli_query($c,$q); // mysqli_query($c,$q) is a must. it will actually query in the table
        mysqli_close($c);
        $c = mysqli_connect($servername,$username,$password,"Members");//forth parameter is when you what to connect to only one database
        if($c)
        {
          $query = "CREATE TABLE Information (ID INT(30) PRIMARY KEY AUTO_INCREMENT ,EMAIL VARCHAR(30) NOT NULL ,PASSWORD VARCHAR(30))";
          mysqli_query($c,$query);
        }
      }
    }
    ?>
  </body>
</html>
