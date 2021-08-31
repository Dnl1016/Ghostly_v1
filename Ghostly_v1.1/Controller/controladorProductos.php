<?php 
require_once("ConexionDB.php");
require_once("../Model/productos.php");
require_once("../Model/crudProductos.php");

class controladorProductos{
    public function __construct(){}

    public function listarProductos()
    {
        $crudProductos = new crudProductos(); //Invocamos el objeto
        return $crudProductos->listarProductos(); //Retornamos la lista de clientes
    }
}
$controladorProductos = new controladorProductos();
if(isset($_GET['listarProductos'])){
    header('Location: ../View/listarProductos.php');
}
?>