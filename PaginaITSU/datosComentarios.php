<?php
    include_once('conexion.php');
    $conexion=new ConexionDB();
    
    $conexion->guardarComentario($_REQUEST['proc'], $_REQUEST['name'], $_REQUEST['comentario']);
    //header("Location: InscripcionReinscripcion.php");
    
    switch($_REQUEST['proc']){
        case 'Inscripcion':
            header("Location: InscripcionReinscripcion.php");
        break;
        case 'CursoEspecial':
            header("Location: CursoEspecial.php");
        break;
        case 'AltaMateria':
            header("Location: AltaMateria.php");
        break;
        case 'BajasMateria':
            header("Location: BajasMateria.php");
        break;
        case 'Kardex':
            header("Location: Kardex.php");
        break;
        case 'BajaTemp':
            header("Location: BajaTemp.php");
        break;
        case 'BajaDefinitiva':
            header("Location: BajaDefinitiva.php");
        break;
    }
?>