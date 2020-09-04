<?php 

require_once 'vendor/autoload.php';

MercadoPago\SDK::setAccessToken("TEST-1369994157319800-080417-01efa61a4ca5fdef05fc7a91d91fc2d7-620784207");
                                        
$payment_methods = MercadoPago::get("/v1/payment_methods");

print_r($payment_methods);