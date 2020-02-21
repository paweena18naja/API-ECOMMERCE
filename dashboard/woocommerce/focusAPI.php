<?php	
header('Content-Type: application/json');		
	
//$consumer_key = 'ck_94965a8b00db1840590401609b5fa15ae824554a';  // focus
$consumer_key = 'ck_b063957fed601adff84a99d82bd73f8d8c6d9e51';  // bewell.me
// Add your own Consumer Key here		
//$consumer_secret = 'cs_b678745e562d93d6106e89770813888456e68ea6'; //focus
$consumer_secret = 'cs_c06a5f8bf2fb21b2661ceb20dc2838bdeca92e44'; //bewell.me
 // Add your own Consumer Secret here		
// $store_url = 'http://www.bewell.me/';

require_once( 'lib/woocommerce-api.php' );

$options = array(
	'debug'           => false,
	'return_as_array' => false,
	'validate_url'    => false,
	'timeout'         => 300,
	'ssl_verify'      => false,
);
//count?_jsonp=orderscount

try {

	//$client = new WC_API_Client( 'https://www.focusshield.com', $consumer_key, $consumer_secret, $options );//focus
	$client = new WC_API_Client( 'https://www.bewell.me', $consumer_key, $consumer_secret, $options); //bewell

	// print_r( $client );
			//print_r( $client->orders->get() );
	$orders = $client->orders->get();		    // Output the order object retrieved from the API	
		  
	// $obj = json_decode($orders);
	//print_r( $orders );


//$x = 0; 

//<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
//<?=iconv("tis-620","utf-8",$objResult["Branch"]);
/******************************************************/		
/******************************************************/		

	$order_id = $orders['orders'][0]['id']);	
	print_r($order_id);
/*

	$order_id 			= iconv("UTF-8","WINDOWS-874",$obj['SuccessResponse']['Body']['Orders'][$x]['OrderId']);	
while($x <=  $order_id = $obj['orders'][$x]['id'].length) {

			$order_id 			= iconv("UTF-8","WINDOWS-874",$obj['orders'][$x]['id']);	
			print_r($order_id  					. '&nbsp'  
			 	.'<br>' );


    $x++;
}

*/

			
} catch ( WC_API_Client_Exception $e ) {

	echo $e->getMessage() . PHP_EOL;
	echo $e->getCode() . PHP_EOL;

	if ( $e instanceof WC_API_Client_HTTP_Exception ) {

		print_r( $e->get_request() );
		print_r( $e->get_response() );
	}
}
?>


