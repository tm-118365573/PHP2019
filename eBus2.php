<?php
session_start();
$fullNameValue = "" ;
$totalValue2="" ;
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal']= $totalValue2 ;
/**
 * Allocate the mobile number session variable to a text
 */
?>
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
  height: 1500px; 
}

body{
    background-color: lightblue;
}
    </style>
    <title> eBusiness 2 </title>
</head>
<body>
    <br>
    <br>
    
    <div class="navbar">
  <a href="Index.php">Home</a>
  <a href="Interest.html">Interests</a>
  <a href="Sport.html">Sport</a>
  <a href="Travel.html">Travel</a>
  <a href="ConsultingService.html">Consulting</a>
</div>
    <div class ="form">
        <form name ="Details" method ="post" action= "eBUS3.php">
            <center>
                <table cellspacing ="10">
                    <tr>
                        <td><b></b></td>
                        <td><b> Enter in your details below</b></td>
                    </tr>
       
                    <tr>
                         <td> Name: </td>
                         <td><input type="text" id="txtName" name="txtName" value="" /> </td>
                    </tr>
       
                     <tr>
                         <td> Phone Number: </td>
                         <td><input type="text" id="txtNum" name="txtNum" value="" /> </td>
                    </tr>
       
                    <tr>
                         <td> Password: </td>
                         <td><input type="text" id="txtPassword" name="txtPassword" value="" /> </td>
                    </tr>
       
                    <tr>
                         <td><input type="Hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /> </td>
                    </tr>
       
                </table>
         </center>
       
       
            <center>  
        <input type="submit" name ="btnContinue" id="btnContinue" onclick="" value="Continue" />
       
            </center>
    </div>
</form>
    </body>
    </html>