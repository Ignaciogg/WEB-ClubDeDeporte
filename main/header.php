<?php
    session_start();

    require '../main/bbdd.php';

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT iduser, email, pass FROM users WHERE iduser = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }
    }

?>     
<header>
        <div class="logo" id="inicio">
            <img src="../img/club-clandestino-de-deporte-uem-logo.png">
        </div>

        <!-- NAV -->
        <div>
            <nav id="nav">
                <div class="menu-div">
                    <ul class="menu-ul">
    
                        <li><a href="../main/index.php">Inicio</a></li>
    
                        <li>
                            <a>Contacto</a>
                            <ul class="sub-menu sub-menu1">
                                <li class="sub-menu-item primersub1"><a href="../contacto/inscripcion.php
                                "> Inscripción </a></li>
                                <li class="sub-menu-item"><a href="../contacto/instancia.php
                                "> Instancia </a></li>
                                <li class="sub-menu-item"><a href="../contacto/horario.php
                                "> Horarios </a></li>
                            </ul>
                        </li>
    
                        <li>
                            <a>Equipos</a>
                            <ul class="sub-menu sub-menu2">
                                <li class="sub-menu-item primersub"><a href="../equipos/equiposF.php
                                ">Fútbol</a></li>
                                <li class="sub-menu-item"><a href="../equipos/equiposB.php
                                ">Baloncesto</a></li>
                                <li class="sub-menu-item"><a href="../equipos/equiposVM.php
                                ">Volleyball masculino</a></li>
                                <li class="sub-menu-item"><a href="../equipos/equiposVF.php
                                ">Volleyball femenino</a></li>
                            </ul>
                        </li>
    
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <li class="sub-menu3">
                                <a>Blog</a>
                                <ul class="sub-menu">
                                    <li class="sub-menu-item primersub2"><a href="../contacto/blog.php">Resumen de la jornada</a></li>
                                </ul>
                            </li>
        
                            <li>
                                <a>Galería de fotos</a>
                                <ul class="sub-menu sub-menu4">
                                    <li class="sub-menu-item primersub"><a href="../galeria/galeriaF.php
                                    ">Fútbol</a></li>
                                    <li class="sub-menu-item"><a href="../galeria/galeriaB.php
                                    ">Baloncesto</a></li>
                                    <li class="sub-menu-item"><a href="../galeria/galeriaVM.php
                                    ">Volleyball masculino</a></li>
                                    <li class="sub-menu-item"><a href="../galeria/galeriaVF.php
                                    ">Volleyball femenino</a></li>
                                </ul>
                            </li>
                            <li class="login"><a href="../main/logout.php">Log-out</a></li>
                        <?php else: ?>
                            <li class="login"><a onclick="document.getElementById('id01').style.display='block'">Log-in</a></li>
                        <?php endif; ?> 
                    </ul>
                </div>
            </nav>
            <div id="icono-nav" onclick="responsiveMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        
        <!-- LOGIN -->
        <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Login">&times;</span>
        
            <form class="modal-content" action="../main/login.php" method="POST" id='formulario_login'>
                <div class="imgcontainer">
                    <img src="../img/UEM-usuario.png" alt="Avatar" class="avatar">
                </div>
            
                <div class="container">
                    <label for="uname"><b>Correo eléctronico</b></label>
                    <input type="text" name="uname_login" class="log_form" id='user_login' required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
            
                    <label for="psw"><b>Contraseña</b></label>
                    <input type="password" name="psw_login" id='pass_login' required>
            
                    <button type="submit">Login</button>
                </div>
            
                <div class="container" style="background-color:#f1f1f1">    
                    <button type="button" onclick="document.getElementById('id02').style.display='block'"  class="cancelbtn">Registrarse</button>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw"><a href="#">¿Olvidaste tu contraseña?</a></span>
                </div>
            </form>
        </div>
        <div id="id02" class="modal">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Login">&times;</span>
        
            <form class="modal-content" action="../main/registro.php" method="POST" id='formulario_Registro' onsubmit="return validarFormulario()">
                <div class="imgcontainer">
                    <img src="../img/UEM-usuario.png" alt="Avatar" class="avatar">
                </div>
            
                <div class="container">
                        <label for="uname"><b>Nombre</b></label>
                        <input type="text" name="uname_registro" class="log_form" id='nombre_registro' required>
                        <label for="lname"><b>Apellidos</b></label>
                        <input type="text" name="lname_registro" class="log_form" id='apellido_registro' required>
                        <label for="email"><b>Correo electrónico</b></label>
                        <input type="text" name="email_registro" class="log_form" id='correo_registro'required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                        <label for="psw"><b>Contraseña</b></label>
                        <input type="password" name="psw_registro" id='pass_registro' required minlength="6" >
                
                        <button type="submit">Crear cuenta</button>
                </div>
            
                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Iniciar sesión</button>
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw"><a href="#">¿Olvidaste tu contraseña?</a></span>
                </div>
            </form>
        </div>
    </header>

