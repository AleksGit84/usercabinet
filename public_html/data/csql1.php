<?php
$cConect = mysql_connect('localhost','root','vjqrjyntqyth');
mysql_select_db("UTM");

$sql = mysql_query("SELECT * FROM users WHERE juridical_address like '%95.215.76%'");
while (mysql_num_rows ($sql) && $row = mysql_fetch_array($sql))
{
echo '<b>'.$row['login'].'</b><br />';
echo nl2br($row['juridical_address']).'<br />';
$row['juridical_address'] = str_replace('95.215.76', '188.130.176', $row['juridical_address']);
$newip = trim(substr($row['juridical_address'],strpos($row['juridical_address'],'188.130.176'),15));
mysql_query("UPDATE users SET juridical_address='".$row['juridical_address']."' WHERE id=".$row['id']);
mysql_query("INSERT INTO messages SET from_uid=0,to_uid=".$row['id'].", date=".time().", message='Vam vydelen realniy IP:".$newip."', read_date=0, r_deleted=0, w_deleted=0");
	    }
	    ?>