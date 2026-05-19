<?php
include("../res/x5engine.php");
$nameList = array("w8z","yp6","knx","wfn","vfp","ppa","yav","xjd","5tt","z47");
$charList = array("2","A","L","M","N","K","U","4","K","U");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
