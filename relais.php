<html>
 <head>
 <title>
 RasPi HomeAutomation
 </title>
 </head>

 <h1>
 <font color="green">
 RasPi Homeautomation
 </font>
 </h1>
 <body>

<form action="relais.php" method ="post">
   <input type="checkbox" name="IO1" value="1">SolarPumpe<br> 
   <input type="checkbox" name="IO2" value="2">SolarVentil<br> 
   <input type="checkbox" name="IO3" value="3">HeizungsPumpe<br> 
   <input type="checkbox" name="IO4" value="4">KesselPumpe<br> 
   <input type="checkbox" name="IO5" value="5">WandHzPumpe<br> 
   <input type="checkbox" name="IO6" value="6">Ventil WW<br> 
   <input type="checkbox" name="IO7" value="7">Ventil Heizung<br> 
   <input type="checkbox" name="IO8" value="8">WW-LadePumpe<br> 
<p>
   <input type="Submit" name="Loeschen" value="Loeschen"><br>
   <input type="Submit" name="IOabfragen" value="WerteStatus"><br>
   <br>
   <input type="Submit" name="IOsetzen" value="Port setzen">
   <input type="Submit" name="IOloeschen" value="Port loeschen"><br>
</form>

<?php
# Checkboxen pruefen
if (isset($_REQUEST['IOabfragen']))
{
	for($x = 0; $x < 9; $x++) 
	{
		$wert = shell_exec("i2cget -y 1 0x38");
		$status1 = $wert AND 1;
		echo $status1;	
	}
}
#IO einschalten
if (isset($_REQUEST['IOsetzen']))
{
	for($x = 0; $x < 9; $x++) 
	{	
		if (isset($_POST["IO$x"])) 
		{
			shell_exec("./set-i2c S $x");
		}
	}
}
#IO abschalten
if (isset($_REQUEST['IOloeschen']))
{
	for($x = 0; $x < 9; $x++) 
	{	
		if (isset($_POST["IO$x"])) 
		{
			shell_exec("./set-i2c C $x");
		}
	}
}

# shell_exec("./set-i2c S 4");
?>

 </body>
</html>

