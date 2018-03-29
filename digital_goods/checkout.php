<?php
require_once ("paypalfunctions.php");

$PaymentOption = "PayPal";
if ( $PaymentOption == "PayPal")
{
        // ==================================
        // PayPal Express Checkout Module
        // ==================================

	
	        
        //'------------------------------------
        //' The paymentAmount is the total value of 
        //' the purchase.
        //'
        //' TODO: Enter the total Payment Amount within the quotes.
        //' example : $paymentAmount = "15.00";
        //'------------------------------------

        $paymentAmount = "4.99";
        
        
        //'------------------------------------
        //' The currencyCodeType  
        //' is set to the selections made on the Integration Assistant 
        //'------------------------------------
        $currencyCodeType = "USD";
        $paymentType = "Sale";

        //'------------------------------------
        //' The returnURL is the location where buyers return to when a
        //' payment has been succesfully authorized.
        //'
        //' This is set to the value entered on the Integration Assistant 
        //'------------------------------------
        $returnURL = "http://homework.stephanscott.com/WDV351/Homework/digital_goods/orderconfirm.php";

        //'------------------------------------
        //' The cancelURL is the location buyers are sent to when they hit the
        //' cancel button during authorization of payment during the PayPal flow
        //'
        //' This is set to the value entered on the Integration Assistant 
        //'------------------------------------
        $cancelURL = "http://homework.stephanscott.com/WDV351/Homework/digital_goods/cancel.php";

        //'------------------------------------
        //' Calls the SetExpressCheckout API call
        //'
        //' The CallSetExpressCheckout function is defined in the file PayPalFunctions.php,
        //' it is included at the top of this file.
        //'-------------------------------------------------

        
		$items = array();
		$items[] = array('name' => 'Item Name', 'amt' => $paymentAmount, 'qty' => 1);
	
		//::ITEMS::
		
		// to add anothe item, uncomment the lines below and comment the line above 
		// $items[] = array('name' => 'Item Name1', 'amt' => $itemAmount1, 'qty' => 1);
		// $items[] = array('name' => 'Item Name2', 'amt' => $itemAmount2, 'qty' => 1);
		// $paymentAmount = $itemAmount1 + $itemAmount2;
		
		// assign corresponding item amounts to "$itemAmount1" and "$itemAmount2"
		// NOTE : sum of all the item amounts should be equal to payment  amount 

		$resArray = SetExpressCheckoutDG( $paymentAmount, $currencyCodeType, $paymentType, 
												$returnURL, $cancelURL, $items );

        $ack = strtoupper($resArray["ACK"]);
        if($ack == "SUCCESS" || $ack == "SUCCESSWITHWARNING")
        {
                $token = urldecode($resArray["TOKEN"]);
                 RedirectToPayPalDG( $token );
        } 
        else  
        {
                //Display a user friendly Error on the page using any of the following error information returned by PayPal
                $ErrorCode = urldecode($resArray["L_ERRORCODE0"]);
                $ErrorShortMsg = urldecode($resArray["L_SHORTMESSAGE0"]);
                $ErrorLongMsg = urldecode($resArray["L_LONGMESSAGE0"]);
                $ErrorSeverityCode = urldecode($resArray["L_SEVERITYCODE0"]);
                
                echo "SetExpressCheckout API call failed. ";
                echo "Detailed Error Message: " . $ErrorLongMsg;
                echo "Short Error Message: " . $ErrorShortMsg;
                echo "Error Code: " . $ErrorCode;
                echo "Error Severity Code: " . $ErrorSeverityCode;
        }
}

/*
$config = array (
 	'mode' => 'sandbox' , 
 	'acct1.UserName' => 'stephanscottwebdev-facilitator_api1.gmail.com',
	'acct1.Password' => '2UAMSE55CYSGNAE4', 
	'acct1.Signature' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31AKqP4ibJrZrqn.kT3xPxkOjcbUrS'
);
$paypalService = new PayPalAPIInterfaceServiceService($config);
$paymentDetails= new PaymentDetailsType();

$itemDetails = new PaymentDetailsItemType();
$itemDetails->Name = 'item';
$itemAmount = '1.00';
$itemDetails->Amount = $itemAmount;
$itemQuantity = '1';
$itemDetails->Quantity = $itemQuantity;

$itemDetails->ItemCategory =  'Digital';

$paymentDetails->PaymentDetailsItem[0] = $itemDetails;

$orderTotal = new BasicAmountType();
$orderTotal->currencyID = 'USD';
$orderTotal->value = $itemAmount * $itemQuantity; 

$paymentDetails->OrderTotal = $orderTotal;
$paymentDetails->PaymentAction = 'Sale';

$setECReqDetails = new SetExpressCheckoutRequestDetailsType();
$setECReqDetails->PaymentDetails[0] = $paymentDetails;
$setECReqDetails->CancelURL = 'http://homework.stephanscott.com/WDV351/Homework/digital_goods/cancel.php';
$setECReqDetails->ReturnURL = 'http://homework.stephanscott.com/WDV351/Homework/digital_goods/orderconfirm.php';

$setECReqType = new SetExpressCheckoutRequestType();
$setECReqType->Version = '104.0';
$setECReqType->SetExpressCheckoutRequestDetails = $setECReqDetails;

$setECReq = new SetExpressCheckoutReq();
$setECReq->SetExpressCheckoutRequest = $setECReqType;

$setECResponse = $paypalService->SetExpressCheckout($setECReq);


*/
?>
