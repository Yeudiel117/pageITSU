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
            LOGIN
        </div>  

        <br>
        <!-- Principal -->
        <main class="mainE">
            <div class="container-sm">
                <form action="datosUsuarios.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="pass" id="pass">
                </div>
              
                <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                </form>
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

    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>