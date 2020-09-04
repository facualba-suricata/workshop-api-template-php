<!DOCTYPE html>
<html>
    <head>
        <title>E-commerce sample</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=1024">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="/assets/custom.css" type="text/css">
    </head>

    <body>
        <div id="page-container">
            <div class="header-container">
                <img src="/assets/images/banner.jpg"/>
            </div>
            <div id="content-wrap">
                <br>  
                <div class="col-lg-8 main-section p-3 bg-white">
                <div class="row m-0">
                    <div class="col-lg-6 left-side-product-box pb-3">
                        <img id="product_img" src="<?php echo $_POST['img'] ?>" class="border p-3">
                    </div>
                    <div class="col-lg-6">
                        <div class="right-side-pro-detail border p-3 m-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p id="product_title" class="m-0 p-0"> <?php echo $_POST['title'] ?> </p>
                                </div>
                                <div class="col-lg-12">
                                    <p id="product_price" class="m-0 p-0 price-pro"> <?php echo $_POST['price'] ?> </p>
                                    <hr class="p-0 m-0">
                                </div>
                                <div class="col-lg-3">
                                    <br><h6>Quantity :</h6>
                                    <input id="product_quantity" type="number" class="form-control text-center w-100" value="1">
                                </div>
                                <div class="col-lg-12">
                                    <hr class="p-0 m-0">
                                    <br>
                                    <!-- ADD PAYMENT FORM HERE -->

                                    <form action="/process_payment.php" method="post" id="paymentForm">
                                        <h3>Detalles del comprador</h3>
                                            <div>
                                            <div>
                                                <label for="email">E-mail</label>
                                                <input id="email" name="email" type="text" value="test@test.com"></select>
                                            </div>
                                            <div>
                                                <label for="docType">Tipo de documento</label>
                                                <select id="docType" name="docType" data-checkout="docType" type="text"></select>
                                            </div>
                                            <div>
                                                <label for="docNumber">Número de documento</label>
                                                <input id="docNumber" name="docNumber" data-checkout="docNumber" type="text"/>
                                            </div>
                                            </div>
                                        <h3>Detalles de la tarjeta</h3>
                                            <div>
                                            <div>
                                                <label for="cardholderName">Titular de la tarjeta</label>
                                                <input id="cardholderName" data-checkout="cardholderName" type="text">
                                            </div>
                                            <div>
                                                <label for="">Fecha de vencimiento</label>
                                                <div>
                                                <input type="text" placeholder="MM" id="cardExpirationMonth" data-checkout="cardExpirationMonth"
                                                    onselectstart="return false" onpaste="return false"
                                                    oncopy="return false" oncut="return false"
                                                    ondrag="return false" ondrop="return false" autocomplete=off>
                                                <span class="date-separator">/</span>
                                                <input type="text" placeholder="YY" id="cardExpirationYear" data-checkout="cardExpirationYear"
                                                    onselectstart="return false" onpaste="return false"
                                                    oncopy="return false" oncut="return false"
                                                    ondrag="return false" ondrop="return false" autocomplete=off>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="cardNumber">Número de la tarjeta</label>
                                                <input type="text" id="cardNumber" data-checkout="cardNumber"
                                                onselectstart="return false" onpaste="return false"
                                                oncopy="return false" oncut="return false"
                                                ondrag="return false" ondrop="return false" autocomplete=off>
                                            </div>
                                            <div>
                                                <label for="securityCode">Código de seguridad</label>
                                                <input id="securityCode" data-checkout="securityCode" type="text"
                                                onselectstart="return false" onpaste="return false"
                                                oncopy="return false" oncut="return false"
                                                ondrag="return false" ondrop="return false" autocomplete=off>
                                            </div>
                                            <div id="issuerInput">
                                                <label for="issuer">Banco emisor</label>
                                                <select id="issuer" name="issuer" data-checkout="issuer"></select>
                                            </div>
                                            <div>
                                                <label for="installments">Cuotas</label>
                                                <select type="text" id="installments" name="installments"></select>
                                            </div>
                                            <div>
                                                <input type="hidden" name="transactionAmount" id="transactionAmount" value="100" />
                                                <input type="hidden" name="paymentMethodId" id="paymentMethodId" />
                                                <input type="hidden" name="description" id="description" />
                                                <br>
                                                <button type="submit">Pagar</button>
                                                <br>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <br><br>
            </div>
            <footer id="footer" class="bg-secondary">  
                <div class="card-body text-left">
                    <img src="/assets/images/logo.png" style="width: 100px"/>
                    <h6 style="color: white; display:inline"> | Workshop Resource</h6>
                </div>
            </footer>
        </div>
    </body>

    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

    <script>
        window.Mercadopago.setPublishableKey("TEST-77ef4be1-f3fb-4681-91b6-5241f48d0327");
        window.Mercadopago.getIdentificationTypes();
    </script>
</html>