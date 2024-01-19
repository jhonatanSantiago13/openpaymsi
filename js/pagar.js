$(document).ready(function() {

	OpenPay.setId('ml7fzmm6udelowsibk1g');
    OpenPay.setApiKey('pk_c8d2c25de6934caca1eb3eb774ec9d67');
    OpenPay.setSandboxMode(true);

    //Se genera el id de dispositivo
    const deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");

    $("#pagar").on("click", function(){

    	$("#pagar").prop("disabled", true);

    	OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);

    })

    const sucess_callbak = (response) =>{

    	const token_id = response.data.id;

    	console.log("token_id", token_id); 

    }

    const error_callbak = (response) => {

    	const desc = response.data.description != undefined ? response.data.description : response.message;
                alert("ERROR [" + response.status + "] " + desc);
                $("#pay-button").prop("disabled", false);
    }
	
});