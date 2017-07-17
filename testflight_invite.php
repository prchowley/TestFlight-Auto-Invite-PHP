<?php
ob_start();

$user_email = $_GET['useremail'];
$appID = $_GET['appID'];
$user_fn = $_GET['userfn'];
$user_ln = $_GET['userln'];

$itcEmail = ""; #Pass Your iTunes Account Email ID here
$file_Python = "testflight_invite.py";

passthru($file_Python.$appID.$itcEmail.$user_fn.$user_ln);

$output = ob_get_clean();

?>
