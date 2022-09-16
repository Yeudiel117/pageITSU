<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesos escolares</title>
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
    <h1 class="text-center text-capitalize fw-bolder">Procesos escolares en el TEC de Uruapan</h1>
    <br>

    <section class="SeccionProcesos">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="InscripcionReinscripcion.php"> <img src="./Multimedia/Imagenes/IyR.png" class="d-block w-100" alt=""> </a>
                    <div class="carousel-caption d-none d-md-block CarruselE">
                        <h5>Solicitar tú inscripción o reinscripción a la institución</h5>
                        <p>Para más información haz clic sobre esta imagen</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="CursoEspecial.php"> <img src="./Multimedia/Imagenes/ScE.png" class="d-block w-100" alt=""> </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Solicita un curso epecial de alguna materia</h5>
                        <p>Para más información haz clic sobre esta imagen</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="AltaMateria.php"> <img src="./Multimedia/Imagenes/AdM.png" class="d-block w-100" alt=""> </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Realiza un alta de materias</h5>
                        <p>Para más información haz clic sobre esta imagen</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <a href="BajasMateria.php"> <img src="./Multimedia/Imagenes/BdM.png" class="d-block w-100" alt=""> </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Realiza una baja de materias</h5>
                        <p>Para más información haz clic sobre esta imagen</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <a href="Kardex.php"> <img src="./Multimedia/Imagenes/ChA.png" class="d-block w-100" alt=""> </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Consulta tú historial académico (KARDEX)</h5>
                        <p>Para más información haz clic sobre esta imagen</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <a href="BajaTemp.php"> <img src="./Multimedia/Imagenes/BaT.png" class="d-block w-100" alt=""> </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Realiza una baja temporal</h5>
                        <p>Para más información haz clic sobre esta imagen</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <a href="BajaDefinitiva.php"> <img src="./Multimedia/Imagenes/BaD.png" class="d-block w-100" alt=""> </a>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Realiza tú baja definitiva</h5>
                        <p>Para más información haz clic sobre esta imagen</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

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