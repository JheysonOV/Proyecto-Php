<?php

include("conexion/confi.php");
include("conexion/conexi.php");

$data = new DatoBases();

    if(isset($_POST['sein'])){
        if(strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1 ){
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        $query = "SELECT * FROM usuarios WHERE EmailUsuario = '$email' AND ClaveUsuario = '$pass'";
        $r = ($data -> seleccionar($query));
 
        if ($r!== false && $r->num_rows > 0) {
            while ($row = mysqli_fetch_array($r)){
                ?>
                <script>
                    window.location.replace("index3.php");
                    </script>
                <?php

            }

        }else{
            ?>
            <h3 class= "resul">Contra o email incorrectos </h3>
            <?php

        }
    }else{
        echo "Mal";
    }
    
}


?>
