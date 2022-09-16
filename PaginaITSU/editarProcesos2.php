<?php
include_once('conexion.php');
$conexion=new ConexionDB();
session_start();
$proceso=$_SESSION['proceso'];
$GLOBALS['procesos']=$conexion->consultaProceso($proceso);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/CssProcesos.css"> 
</head>
<body style="background-color: #1569ae;">
<header>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Procesos escolares</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="https://tecuruapan.edu.mx/">TEC Uruapan</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                        Procesos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="navbarDropdown">
                        <li><a class="dropdown-item" href="InscripcionReinscripcion.php">Inscripcion y Reincripcion</a></li>
                        <li><a class="dropdown-item" href="CursoEspecial.php">Solicitar Curso Especial</a></li>
                        <li><a class="dropdown-item" href="AltaMateria.php">Altas de materias</a></li>
                        <li><a class="dropdown-item" href="BajasMateria.php">Bajas de materias</a></li>
                        <li><a class="dropdown-item" href="Kardex.php">Consulta de Historial Academico(Kardex)</a></li>
                        <li><a class="dropdown-item" href="BajaTemp.php">Baja Temporal</a></li>
                        <li><a class="dropdown-item" href="BajaDefinitiva.php">Baja Definitiva</a></li>
                        
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="adminlogin.php">Ingresar como administrador</a>
                    </li>
                </ul>
                
                
            </div>
        </div>
    </nav>
    </header>

    <br>

    <section class="SecContenido">
        <br>
        <br>

        <div class="text-center fs-1 fw-bolder">
            EDITAR PROCESOS
        </div>  

        <br>
        <!-- Principal -->
        <main class="mainE">
            <div class="container-sm">
                <form action="datosProcesos.php">
                <div class="mb-3">
                    <div>
                        <select class="form-select" name="opcproceso" id="opcproceso" aria-label="Default select example">
                        <option value="0">Seleccion el proceso para editar</option>
                        <option value="1">Inscripcion</option>
                        <option value="2">Curso Especial</option>
                        <option value="3">Alta Materia</option>
                        <option value="4">Baja Materia</option>
                        <option value="5">Kardex</option>
                        <option value="6">Baja Temporal</option>
                        <option value="7">Baja Definitiva</option>
                    </select>
                    <br>
                    </div>
                    <label for="exampleInputEmail1" class="form-label">Texto del proceso</label>
                    <textarea id="ntexto" name="ntexto" class="form-control" style="height: 800px"><?php 
                        $texto=$GLOBALS['procesos']->fetch_assoc();
                        echo $texto['texto'];  ?></textarea>
                    <!--<input type="text" class="form-control" name="ntexto" id="ntexto" aria-describedby="emailHelp">-->
                </div>
                
                <div class="row g-2">
                    <div class="col-1">
                        <button type="submit" name="accion" id="accion" value="editar" class="btn btn-primary btn-lg">Editar</button>
                    </div>
                        <div class="col-2">
                            <button type="submit" name="accion" id="accion" value="cargar" class="btn btn-primary btn-lg">Cargar Proceso</button>
                        </div>
                </div>
                </form>
                <br>
            </div>
        </main>
        <!-- Aside -->
        <aside>
            <nav>
                
            </nav>
        </aside>
    </section>
    <br>

    <!-- Cosas que se deben usar -->
    <form action=""></form>
    <table></table>
    <ol></ol>
    <img src="" alt="">

    <footer class="Foot" style="background-color: #e3f2fd;">
        <div class="contenedor">
            <div class="row g-2 contenido">
                <div class="col">
                
                <img src="./Multimedia/Imagenes/LOGOGOB.png">
                </div>
            

            <div class="col-4 contenido">
                <h5>Enlaces</h5>
                <a href="https://tecuruapan.edu.mx/aviso-de-privacidad/">Aviso de Privacidad</a>
                <a href="http://consultapublicamx.inai.org.mx:8080/vut-web/?idSujetoObigadoParametro=3385&amp;idEntidadParametro=16&amp;idSectorParametro=21" target="_blank" rel="noopener">Transparencia</a>
                
                <a title="Enlace abre en ventana nueva" href="https://participa.gob.mx" target="_blank" rel="noopener">Participa</a>
                <a title="Enlace abre en ventana nueva" href="https://www.gob.mx/publicaciones" target="_blank" rel="noopener">Publicaciones Oficiales</a>
                <a title="Enlace abre en ventana nueva" href="http://www.ordenjuridico.gob.mx" target="_blank" rel="noopener">Marco Jurídico</a>
                <a title="Enlace abre en ventana nueva" href="https://consultapublicamx.inai.org.mx/vut-web/" target="_blank" rel="noopener">Plataforma Nacional de Transparencia</a>
            </div>
            
            <div class="col-6 contenido">
                <h5>Siguenos</h5>
                <a href="https://www.facebook.com/tecdeuruapan" target="_blank" rel="noopener"><img loading="lazy"  src="https://tecuruapan.edu.mx/wp-content/uploads/2021/06/facebook.png" alt="" width="32" height="32" /></a>
                <a href="https://twitter.com/tec_uruapan" target="_blank" rel="noopener"><img loading="lazy"  src="https://tecuruapan.edu.mx/wp-content/uploads/2021/06/twitter.png" alt="" width="30" height="30" /></a>
                <a href="https://www.instagram.com/tecnmcampusuruapan/" target="_blank" rel="noopener"><img loading="lazy"  src="https://tecuruapan.edu.mx/wp-content/uploads/2021/06/instagram_bottom.png" alt="" width="33" height="33" /></a>
                <a href="https://login.microsoftonline.com" target="_blank" rel="noopener"><img loading="lazy" src="https://tecuruapan.edu.mx/wp-content/uploads/2021/06/correo-icono.png" alt="" width="35" height="37" /></a>
            </div>
            </div>
        </div>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>