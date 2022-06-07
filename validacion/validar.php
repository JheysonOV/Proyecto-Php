<?php



$data = new DatoBases();


    if(isset($_POST['sein']) && $_SERVER['REQUEST_METHOD'] =='POST'){

        $user1 = mysqli_real_escape_string($data->envio, $_POST['email']);
        $pass = mysqli_real_escape_string($data->envio, $_POST['pass']);

        if(empty($user1) || empty($pass)){
            header('location:../index1.php?msg='.urlencode('Debe llenar los datos'));
        }else{
            $query = "SELECT * FROM registro WHERE EmailUsuario = '$user1' ";
            $resultado = $data-> seleccionar($query);
            if(mysqli_num_rows($resultado)){
                if ($resultado->num_rows > 0){
                while ($row = mysqli_fetch_array($resultado)){
                        $find = $row['ClaveUsuario'];
                    if($pass == $find){
                        $login = $data->UsuaRIO($query);
                    }else{
                            echo "erro pa";
                    }
                }


            }else{
                echo "erro pa";
            }

        }
    }




}






?>
