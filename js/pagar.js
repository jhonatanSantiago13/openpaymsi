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

    const sucess_callbak = function(response) {

        const token_id = response.data.id;

        $('#token_id').val(token_id);


        /*console.log("token_id", token_id);
        console.log("deviceIdHiddenFieldName", deviceIdHiddenFieldName);
        const url = "pagar.php?token_id="+token_id+"&deviceIdHiddenFieldName="+$("#deviceIdHiddenFieldName").val();
        document.location.href=url;*/
        // $('#payment-form').submit();

        const data = $('#payment-form').serializeArray();

        // console.log("data", data);

        $.ajax({

                type: 'POST', //aqui puede ser igual get
                url: 'pagar.php', //aqui va tu direccion donde esta tu funcion php
                data: data, //aqui tus datos
                success: function(response) {
                console.log("respuesta", response);

        }

        });

    };

    /*const sucess_callbak = (response) =>{
    	let token_id = response.data.id;
    	$('#token_id').val(token_id);
    	let datos = new FormData();
    	datos.append("deviceIdHiddenFieldName", deviceSessionId);
    	datos.append("token_id", token_id);
    	fetch("pagar.php",{
    		  method: "post",
		      body: datos
		}).then(response => response.text())
          .then(response => {
              		console.log("response", response);
        })

    }*/

    const error_callbak = (response) => {

    	const desc = response.data.description != undefined ? response.data.description : response.message;

                alert("ERROR [" + response.status + "] " + desc);

                $("#pay-button").prop("disabled", false);

    }

});