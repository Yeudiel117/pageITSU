<?php
    include_once('conexion.php');
    $conexion=new ConexionDB();
    session_start();

    if($_REQUEST['accion']=='cargar'){
        if($_REQUEST['opcproceso']!='0'){
            $_SESSION['proceso']=$_REQUEST['opcproceso'];
            //$GLOBALS['proceso']=$conexion->consultaProceso($_REQUEST['opcproceso']);
            header("Location: editarprocesos2.php");
        }else{
            echo '<script language="javascript">';
            echo 'alert("POR FAVOR INTRODUZCA EL PROCESO QUE QUIERE EDITAR")';
            echo '</script>'; 

            echo '<script language="javascript">';
            echo 'window.location.replace("editarProcesos.php");';
            echo '</script>'; 
        }

    }else{
    if($_REQUEST['opcproceso']!='0'){
            $conexion->actualizarProceso($_REQUEST['opcproceso'], $_REQUEST['ntexto']);
            switch($_REQUEST['opcproceso']){
                case '1':
                    header("Location: InscripcionReinscripcion.php");
                break;
                case '2':
                    header("Location: CursoEspecial.php");
                break;
                case '3':
                    header("Location: AltaMateria.php");
                break;
                case '4':
                    header("Location: BajasMateria.php");
                break;
                case '5':
                    header("Location: Kardex.php");
                break;
                case '6':
                    header("Location: BajaTemp.php");
                break;
                case '7':
                    header("Location: BajaDefinitiva.php");
                break;
            }
        }else{
            echo '<script language="javascript">';
            echo 'alert("POR FAVOR INTRODUZCA EL PROCESO QUE QUIERE CARGAR")';
            echo '</script>'; 

            echo '<script language="javascript">';
            echo 'window.location.replace("editarProcesos.php");';
            echo '</script>'; 
        }
    }
?>