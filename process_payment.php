<?php 

require_once 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TEST-1369994157319800-080417-01efa61a4ca5fdef05fc7a91d91fc2d7-620784207");

$payment = new MercadoPago\Payment();
$payment->transaction_amount = (float)$_POST['transactionAmount'];
$payment->token = $_POST['token'];
$payment->description = $_POST['description'];
$payment->installments = (int)$_POST['installments'];
$payment->payment_method_id = $_POST['paymentMethodId'];
$payment->issuer_id = (int)$_POST['issuer'];

$payer = new MercadoPago\Payer();
$payer->email = $_POST['email'];
$payer->identification = array( 
    "type" => $_POST['docType'],
    "number" => $_POST['docNumber']
);

$payment->payer = $payer;

$payment->save();

$response = array(
    'status' => $payment->status,
    'status_detail' => $payment->status_detail,
    'id' => $payment->id,
    'payment' => $payment
);

echo json_encode($response);
