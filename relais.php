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
   <input type="checkbox" name="IO1" value="2">SolarPumpe<br> 
   <input type="checkbox" name="IO2" value="2">SolarVentil<br> 
   <input type="checkbox" name="IO3" value="2">HeizungsPumpe<br> 
   <input type="checkbox" name="IO4" value="2">KesselPumpe<br> 
   <input type="checkbox" name="IO5" value="2">WandHzPumpe<br> 
   <input type="checkbox" name="IO6" value="2">Ventil WW<br> 
   <input type="checkbox" name="IO7" value="2">Ventil Heizung<br> 
   <input type="checkbox" name="IO8" value="2">WW-LadePumpe<br> 
<p>
   <input type="Submit" name="Loeschen" value="Loeschen"><br>
   <input type="Submit" name="IOabfragen" value="WerteStatus"><br>
   <br>
   <input type="Submit" name="IOsetzen" value="Port setzen">
   <input type="Submit" name="IOloeschen" value="Port loeschen"><br>
</form>

<?php
 shell_exec("./set-i2c S 4");
?>

 </body>
 </html>

