<?php

include("config.php");
$se=$_REQUEST['se'];

$sel=sqlsrv_query($con, "select * from items where itemno='$se'");
	    while($arr=sqlsrv_fetch_array($sel, SQLSRV_FETCH_BOTH))
         {
		 $a=$arr['itemno'];
		
		  echo"<form method='post'><br><br><center><table width='450' border='1' cellspacing='0' cellpadding='0'>
  <tr>
  <br>
    <td  rowspan='4'><img src='itempics/$a.jpg' width=200 height=200></td>
    <td ><br><b>&nbsp;Item No:</b>". $arr['itemno']."
<br><br> <b>&nbsp;Product:</b>". $arr['desc1']."
<br><br><b>&nbsp;Price:</b>".$arr['price']."
<br><br><b>&nbsp;Details:</b>".$arr['info']."
 <br><br></td>

  </tr>
</table></center></form>";
		  }
		
		   ?>