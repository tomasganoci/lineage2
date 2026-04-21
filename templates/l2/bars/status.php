<?php include "config/login.php" ?>
<?php include "config/status.php" ?>
<?php include "config/database.php" ?>
<?php  
//Online Players
        $query = ("SELECT * FROM characters WHERE online=1 and accesslevel>=0");
        $result = mysql_query($query) or die(mysql_error());
        $num2=mysql_numrows($result);
        $sum=$num2;
//Total Characters
$query = ("SELECT * FROM characters WHERE accesslevel>=0");
$result = mysql_query($query) or die(mysql_error());
$char2=mysql_numrows($result);

//Total Accounts
$query = ("SELECT * FROM accounts WHERE access_level>=0");

$result = mysql_query($query) or die(mysql_error());

$acc2=mysql_numrows($result);

mysql_close();

mysql_connect($db_serv,$db_user,$db_pass) or die (mysql_error());

mysql_select_db($db_name) or die(mysql_error());
?>
<p>Online Players</p>
  <p>
   <?php print ("$num2"); ?>
  </p>
<?php
     
    //if ($server && $port && $timeout) {
        $game =  @fsockopen("$server", $portg, $errno, $errstr, $timeout);
        $login =  @fsockopen("$server", $portl, $errno, $errstr, $timeout);
    //}
    
        
    if($login) {
        echo "Login: <span class=\"status-online\"><b>Online</b></span><br>";
    }
    else {
        echo "Login: <span class=\"status-offline\"><b>Offline</b></span><br>";
    }
    if($game) {
        echo "Game: <span class=\"status-online\"><b>Online</b></span><br>";
    }
    else {
        echo "Game: <span class=\"status-offline\"><b>Offline</b></span><br>";
    }
    echo "";
?>
<p>
 Accounts: <?php print ("$acc2"); ?>
<br>
 Characters: <?php print ("$char2"); ?>
</p>
