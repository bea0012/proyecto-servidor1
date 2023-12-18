<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de Ajax</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<button id="ajaxButton">Realizar llamada</button>

<div id="resultado"></div>

<script>
    $(document).ready(function(){
        $("#ajaxButton").click(function(){
            $.ajax({
                url: 'http://127.0.0.1:8000/DameAnimales',
                type: "GET",
                dataType: 'json',
                success: function(response) {
                    console.log(response.datos);
                    $('#resultado').text('Respuesta del Servidor: ' +  response.datos);
                },
                error: function(error) {
                    console.log("Error: ", error);
                }
            });
        });
    });
</script>

</body>
</html>