<html>
<head>
<meta charset="utf-8">
</head>
<?php
	include "dbonline.php";
	
	//sql 회원정보 전송
	$sql = mq("UPDATE user SET wallet='".$_POST['wallet']."' WHERE email='".$_SESSION['email']."'");

?>
<script type="text/javascript">alert("Complete."); location.href='../en/wallet.php';</script>
</html>