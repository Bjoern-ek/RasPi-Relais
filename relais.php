<html>
 <head>
 <title>
 Raspberry Pi Webserver
 </title>
 </head>

 <h1>
 <font color="red">
 Raspberry Pi Webserver
 </font>
 </h1>
 <body>

<form action="relais.php" method ="post">
   <input type="checkbox" name="LED1" value="2">SolarPumpe<br> 
   <input type="checkbox" name="LED2" value="2">LED 2<br> 
   <input type="checkbox" name="LED3" value="2">LED 3<br> 
   <input type="checkbox" name="LED4" value="2">LED 4<br> 
   <input type="checkbox" name="LED5" value="2">LED 5<br> 
   <input type="checkbox" name="LED6" value="2">LED 6<br> 
   <input type="checkbox" name="LED7" value="2">LED 7<br> 
   <input type="checkbox" name="LED8" value="2">LED 8<br> 
<p>
   <input type="Submit" name="Loeschen" value="Loeschen"><br>
   <input type="Submit" name="LED-abfragen" value="LED Status"><br>
   <br>
   <input type="Submit" name="LED-setzen" value="LED setzen">
   <input type="Submit" name="LED-loeschen" value="LED loeschen"><br>
</form>

<?php
 shell_exec("./set-i2c S 4");
?>

 </body>
 </html>

