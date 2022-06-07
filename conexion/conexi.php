<?php


class DatoBases{

    public $host = DB_HOST;
    public $usuario = DB_user;
    public  $passi = DB_passi;
    public  $base = DB_base;
    
    public $error1;
    public $envio;


    public function __construct(){

        $this->ConectarSem3();

    }

    private function ConectarSem3(){

        $this->envio = new mysqli($this->host, $this->usuario, $this->passi, $this->base);

        if (!$this-> envio){
            $this->error1 = "No se conecto a la base de datos".$this->envio->connect_error;
        }
    }

    public function seleccionar($query){  

        $resultado = $this->envio->query($query) or die($this->envio->error1.__LINE__);

        if ($resultado->num_rows > 0){
            
            return $resultado;
            


        }else{
            return false;
        }
    }

    public function UsuaRIO($query){
        $entrada = $this->envio->query($query) or die ($this->envio->error1.__LINE__);
        if($entrada){
            echo "Batos usuario corectos";
            exit();


        }else{
            echo "error";
        }
    }

}




    
?>