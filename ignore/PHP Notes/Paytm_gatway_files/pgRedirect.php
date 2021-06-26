<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

/*

//deleteing cookie
setcookie("order_id_rc", "", time()-3600);
setcookie("provider_id_rc", "", time()-3600);
setcookie("circle_rc", "", time()-3600);
setcookie("number_rc", "", time()-3600);
setcookie("amount_rc",  "", time()-3600);
setcookie("usertx_rc",  "", time()-3600);

No Need To USe This Either use session or database

*/


// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();


// Variable Of Our Site 
$order_id="OR".rand(10000,500000);
$provider_id = $_POST['operator']; 
$circle = $_POST['circle']; 
$number = $_POST['mnumber'];
$amount = $_POST['amount'];
$usertx = "91910";

// Initialize the session.
// If you are using session_name("something"), don't forget it now!



setcookie("order_id_rc", $order_id, time()+5*60);
setcookie("provider_id_rc", $provider_id , time()+5*60);
setcookie("circle_rc", $circle, time()+5*60);
setcookie("number_rc", $number, time()+5*60);
setcookie("amount_rc", $amount, time()+5*60);
setcookie("usertx_rc", $usertx, time()+5*60);
/* $_SESSION['order_id_rc']=$order_id;
$_SESSION['provider_id_rc']=$provider_id;
$_SESSION['circle_rc']=$circle;
$_SESSION['number_rc']=$number;
$_SESSION['amount_rc']=$amount;
$_SESSION['usertx_rc']=$usertx;
//end
*/
$ORDER_ID = $order_id;
$CUST_ID = "CUST001";
$INDUSTRY_TYPE_ID = "retail";
$CHANNEL_ID = "WEB";
$TXN_AMOUNT = $amount;

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$hst=$_SERVER['HTTP_HOST'];//for getting host name

$paramList["CALLBACK_URL"] = "http://".$hst."/charge/recharge.php"; //Here The Paytm Will Redirect The use After Payment is successufll 
/*
$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
$paramList["EMAIL"] = $EMAIL; //Email ID of customer
$paramList["VERIFIED_BY"] = "EMAIL"; //
$paramList["IS_USER_VERIFIED"] = "YES"; //
*/

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>