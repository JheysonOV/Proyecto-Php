
<!DOCTYPE html>

<html lang="es">

    <head> 

        <meta charset="UTF-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="styles/prueba.css"> 
        <link rel="stylesheet" href="styles/normal.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap" rel="stylesheet">
    

        <title>Login</title>

    </head>

    <body>
        
        <div class="centro">

            <main class="logincss">

                <div class="webos">  </div>

                <div class="login"> 

                    <div class="login-im"> 

                        <img src="assets/collab.png" alt="">

                        <h1> Welcome</h1>

                        <form method="POST" class="login-form">

                            

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

                            <input type="submit" name="sein" value="Iniciar Sesion" >

                    
            
                                <div class="forget">¿Olvido su Contraseña? </div>

                                <div class="linkin">

                                <a href="index2.php">Registrarse</a>
                            </div>

                        <?php
                        include("configuracion/operaciones.php");
                        
                        ?>
                    </div>

                </div>

            </main>

            </div>
    </body>

</html>