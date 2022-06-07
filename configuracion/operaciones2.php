<?php
include("conexion/conexi2.php");
    
if (isset($_POST['sein'])){
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass'])){
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO usuarios (NombreUsuario, EmailUsuario, ClaveUsuario, FechaRe) VALUES ('$nombre','$email','$pass', '$fechareg')";
        $resul = mysqli_query($conec , $consulta);
        if ($resul){
            ?>
            <h3 class= "resul">Ingreso exitoso </h3>
            <?php
                
        }else{
            ?>
            <h3 class= "resul">No ingreso a la base </h3>
        <?php
        }
    }else {
        ?>
        <h3 class= "resul">Complete los campos</h3>
        <?php
            }
        }
    


?>
