<?php
require 'vendor/autoload.php';

abstract class MiPDF
{

    private $titulo;
    private $contenido;
    private $tipoLetra;
    private $tamaño;
    private $alineacion;

    public function __construct($titulo, $contenido, $tipoLetra, $tamaño, $alineacion)
    {

        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->tipoLetra = $tipoLetra;
        $this->tamaño = $tamaño;
        $this->alineacion = $alineacion;
    }


    public function generaDoc(){

    }

    public function almacenaDoc(){

    }

    public function devuelveDoc(){
        
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function getTipoLetra()
    {
        return $this->tipoLetra;
    }

    public function setTipoLetra($tipoLetra)
    {
        $this->tipoLetra = $tipoLetra;
    }

    public function getTamaño()
    {
        return $this->tamaño;
    }

    public function setTamaño($tamaño)
    {
        $this->tamaño = $tamaño;
    }

    public function getAlineacion()
    {
        return $this->alineacion;
    }

    public function setAlineacion($alineacion)
    {
        $this->alineacion = $alineacion;
    }


}














































$html = '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miPDF</title>
</head>
<body>
    
</body>
</html>
';
