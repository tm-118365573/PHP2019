<!DOCTYPE html>
<html>
    <head>
        <style>
        .navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}

body{
    background-color: lightblue;
}
    </style>
    </head>
    <body>
        
        <br>
        <br>
        <br>
        
        <div class="navbar">
  <a href="Index.php">Home</a>
  <a href="Interest.html">Interests</a>
  <a href="Sport.html">Sport</a>
  <a href="Travel.html">Travel</a>
  <a href="ConsultingService.html">Consulting</a>
</div>
    <!-- //Starting the session to get the session variable from last page-->
   
 <?php
 
 session_start () ;
 $totalValue2 = $_POST ['txtTotal'];
 
 $fullNameValue= $_POST ['txtName'];
 
 echo "Name: ".$fullNameValue.".";
 
 echo "<br></br>";
 
 echo "Total Value: ".$totalValue2.".";
 
 ?>
    </body>
</html>

