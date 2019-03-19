
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="https.//www.w3.org/1999/xhtml"
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
          <meta charset="utf-8" />
          <title> Ebusiness 1</title>
          <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
   
    <body>
        
        <div class="navbar">
  <a href="index.php">Home</a>
  <a href="Interest.html">Interests</a>
  <a href="Sport.html">Sport</a>
  <a href="Travel.html">Travel</a>
  <a href="ConsultingService.html">Consulting</a>
</div>
   
        <div class="form">
            <form name="intCalc" method="post" action="eBus2.php">
                <br>
                <br>
                <center>
                  <h1>Shop Calculator</h1>
                </center>
               
                <center>
                    <table cellspacing="15">
                        <tr>
                          <td><b><h1 style="background-color:rgba(255, 99, 71, 0.2);">Select a Consulting Service:</b></td>
                        </tr>
                         <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things (Robots) @ $2000</td>
                            <td><input type="radio" id="Autonomous" name="rdoGroup" value="2000" /></td>
                        </tr>
                        <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="Immersive" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
               
                <center>
                    <table cellspacing="15">
                        <tr>
                            <td><b></b></td>
                              <td><b>Amount</b></td>
                        </tr>
                        <br>
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <br>
                        <tr>
                            <td>Discount @ 10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <br>
                        <tr>
                            <td>+VAT @ 20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly /></td>
                        </tr>
                        <br>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" />
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear Choice" />
                    <input type="submit" name="btnAdd" id="btnAdd" onclick="" value="Add to Shopping Cart" />
                </center>
            </form>
        </div>
       
        <script type="text/javascript">
            function calcSub() {
                //Assigning variables to the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var Autonomous = parseFloat(document.getElementById('Autonomous').value);
                var Immersive = parseFloat(document.getElementById('Immersive').value);
               
                //If radio buttons are clicked, values are assigned
                if (document.getElementById('Blockchain').checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById('Autonomous').checked) {
                    document.intCalc.txtSubTot.value = Autonomous;
                    subAmount = Autonomous;
                    calculation(subAmount);
            }
            else if (document.getElementById('Immersive').checked) {
                    document.intCalc.txtSubTot.value = Immersive;
                    subAmount = Immersive;
                    calculation(subAmount);
                }
            }
           
            //Function for calculating  the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * .10);
                var vatCalc = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - discCalc + vatCalc);
               
                //Inserting them into the correct fields
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
           
            function AmountClear() {
                document.getElementById('txtSubTot').value ="";
                document.getElementById('txtDisc').value ="";
                document.getElementById('txtVat').value ="";
                document.getElementById('txtTotal').value ="";
            }
           
        </script>
    </body>
</html>

