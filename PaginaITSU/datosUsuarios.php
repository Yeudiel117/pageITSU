<?php
include_once('conexion.php');
$conexion=new ConexionDB();
$GLOBALS['users']=$conexion->consultaAdmin('');
while($admin=$GLOBALS['users']->fetch_assoc()){
    if($admin['usuario']==$_REQUEST['usuario'] && $admin['contrasena']==$_REQUEST['pass']){
        header("Location: editarProcesos.php");
    }else{
        echo "<script>alert('ESTE USUARIO NO TIENE ACCESO DE ADMINISTRADOR');</script>";
    }   
}


/*if($_REQUEST['usuario'] && $_REQUEST['pass']=='root'){
    header("Location: editarProcesos.php");
}else{
    echo "<script>alert('ESTE USUARIO NO TIENE ACCESO DE ADMINISTRADOR');</script>";
}*/
?>