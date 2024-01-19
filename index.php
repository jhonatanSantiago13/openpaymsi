<!DOCTYPE html>
<html lang="en">
<head>

	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://openpay.s3.amazonaws.com/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://openpay.s3.amazonaws.com/openpay-data.v1.min.js"></script>
    <script type="text/javascript" src="js/pagar.js"></script>

    <link rel="stylesheet" type="text/css" href="estilos/estilos.css" />
	<title>Open Pay Meses sin intereses</title>

</head>
<body>
	<div class="bkng-tb-cntnt">
        <div class="pymnts">
            <form action="#" method="POST" id="payment-form">
                <input type="hidden" name="token_id" id="token_id">
                <div class="pymnt-itm card active">
                    <h2>Tarjeta de crédito o débito</h2>
                    <div class="pymnt-cntnt">
                        <div class="card-expl">
                            <div class="credit">
                                <h4>Tarjetas de crédito</h4>
                            </div>
                            <div class="debit">
                                <h4>Tarjetas de débito</h4>
                            </div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col l">
                                <label>Nombre del titular</label><input type="text" value="jhonatan" placeholder="Como aparece en la tarjeta" autocomplete="off" data-openpay-card="holder_name">
                            </div>
                            <div class="sctn-col">
                                <label>Número de tarjeta</label><input type="text" value="4242424242424242" autocomplete="off" data-openpay-card="card_number">
                            </div>
                        </div>
                        <div class="sctn-row">
                            <div class="sctn-col l">
                                <label>Fecha de expiración</label>
                                <div class="sctn-col half l"><input type="text" value="12" placeholder="Mes" data-openpay-card="expiration_month"></div>
                                <div class="sctn-col half l"><input type="text" value="27" placeholder="Año" data-openpay-card="expiration_year"></div>
                            </div>
                            <div class="sctn-col cvv"><label>Código de seguridad</label>
                                <div class="sctn-col half l"><input type="text" value="854" placeholder="3 dígitos" autocomplete="off" data-openpay-card="cvv2"></div>
                            </div>
                        </div>
                        <div class="openpay">
                            <div class="logo">Transacciones realizadas vía:</div>
                            <div class="shield">Tus pagos se realizan de forma segura con encriptación de 256 bits</div>
                        </div>
                        <div class="sctn-row">
                            <a class="button rght" id="pagar">Pagar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
	
</body>
</html>