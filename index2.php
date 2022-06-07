<!DOCTYPE html>
<html lang="es">

    <head> 

        <meta charset="UTF-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="styles/prueba2.css"> 
        <link rel="stylesheet" href="styles/normal.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">
    

        <title>Registro</title>

    </head>

    <body>
        
        <div class="centro">

            <main class="logincss">

                <div class="webos">  </div>

                <div class="login"> 

                    <div class="login-im"> 

                        <div class="texto-medio">

                            <h1> Create new Account </h1>
    
                            </div>

                        <img src="assets/probando.png" width="90">


                        <form method="POST" class="login-form">

                            <div class="principal">

                                <input type="text" name="nombre" id="nombre" required>

                                <span></span>

                                    <div class="foto"> 

                                    <img src="assets/persona.png" width="20" height="20" alt="" />

                                    </div>

                                    <label >Nombre y Apellidos</label>

                                </label>

                            </div>

                            

                            <div class="principal">


                                <input type="email" name="email" id="email" required>

                                <span></span>

                                    <div class="foto"> 

                                    <img src="assets/correo.png" width="20" height="20" alt="" />

                                    </div>

                                    <label >Correo Electronico</label>

                                </label>

                            </div>

                            <div class="principal1">

                                <input type="password" name="pass"  required>

                                    <span></span>

                                    <div class="foto"> 

                                        <img src="assets/clave.png" width="20" height="20" alt="" />

                                    </div>

                                <label >Password </label>
                            </div>

                            <input type="submit" name="sein" value="SIGN UP">
            
                                <div class="forget"></div>

                                <div class="linkin">

                                <a href="index1.php">volver</a>
                            </div>

                        </form>

                        <?php
                        include("configuracion/operaciones2.php");
                        
                        ?>
                    </div>

                </div>

            </main>

            </div>
    </body>

</html>