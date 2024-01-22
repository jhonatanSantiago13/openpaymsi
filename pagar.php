<?php

require(dirname(__FILE__) . '/Openpay.php');

if (isset($_POST)) {

	//SELECCIONAR EL PLAN A MESES
	$plan = array('payments' => "6",);
	$openpay = Openpay::getInstance('ml7fzmm6udelowsibk1g', 'sk_3383aab54d8f4b7ea5b9bc22da694cd2', 'MX');

    OpenPay::setSandboxMode(true);
    $customer = array(
        'name' => "Taylor",
        'last_name' => "Swift",
        'phone_number' => 9991111119,
        'email' => "example@me.com",);

   $chargeData = array(
       'method' => 'card',
       // 'source_id' =>"kqsa36b0ciwglvdgxt3o",
       'source_id' => $_POST["token_id"],
       'amount' => 6000, // formato nÃºmerico con hasta dos dÃ­gitos decimales.
       'payment_plan' => $plan,
       'description' => "TEST3MSI",
       //'redirect_url' => 'https://clarity.com.mx/manager/tools/desktools.html',
      // 'use_card_points' => $_POST["use_card_points"], // Opcional, si estamos usando puntos
       'device_session_id' => $_POST["deviceIdHiddenFieldName"],
       'customer' => $customer

       );

   $charge = $openpay->charges->create($chargeData);

   var_dump($charge->status);

}

?>