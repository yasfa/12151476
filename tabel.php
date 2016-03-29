<html>
<head></head>
<title>Table</title>
<body>
<table border='1' cellpadding="0" cellspacing="0" bordercolor="#0099CC" style='colappse:0;' align='center' width='605   height="400"    '>
<tr>
    <td height="34" colspan="4" bgcolor="#0099CC">
<center>
      	<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF" colspan=3></div>
          </font>		
</font>
    	</center>	
	<center>
	<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF">
	<div align="center"></div>
        	</font></font>
	<table width="602" border="0" align="left" cellpadding="0" cellspacing="0">
        	<tr>
          <td width="51">
<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>rank</b></font></font></td>
          <td width="249">
<font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>movie</b></font></font></td>
          <td width="173"><font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>downloads</b></font></font></td>
          <td width="129"><font face="Verdana, Arial, Helvetica, sans-serif">
<font color="#FFFFFF"><b>grosses</b></font></font></td>
        </tr>
      </table>
    </center>
  	</td>
  </tr>
<?php
	for ($i=1; $i<=10; $i++)
	{
	if ($i%2==1)
		{
		$warna="#DBE5F0";
		echo"
		<tr bgcolor='$warna'>
		<td height=34><center>$i</td>
		<td height=34 colspan=3>&nbsp
		Fast Five  
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		9,260,000
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp$626,137,675
		</td>
		</tr>";
		$i++;
		}
		else{
		$warna="white";
		}
		echo "
		<tr bgcolor='white'>
		<td height=34 width=43><center>$i
		</td>
		<td height=34 width=210> &nbspThe Hangover II 
		</td>
		<td height=34 width=180><center>8,840,000</td>	
		<td height=34><center>$581,418,000
		</td>
		</tr>";
}
?>
<tr>
<td height=25 colspan="4" bgcolor="#0099CC"><b><font color="#FFFFFF"> torrentfreak.com</font></b></td></tr>
<tr>
 </tr>
</table>
</body>
</html>


 
