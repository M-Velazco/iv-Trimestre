<!DOCTYPE html>
<html lang="az">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Inicio de sesion</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="validacion\validarInicioSesion.php" method="post" class="sign-in-form">
            <h2 class="title">Iniciar sesion</h2>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="int" id= "Idusuario" name="Idusuario"placeholder="Numero de Identificacion" minlength="10" maxlength="10" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"id="Contraseña"name="Contraseña" placeholder="Contraseña" maxlength="50" pattern="^(?=.*[a-zA-Z])(?=.*\d).+$" minlength="5" required />
            
            
            </div>
            <a href="#"  class="href">
              Olvidé mi contraseña :
              </a>

            <input type="submit" value="Ingresar" class="btn solid" />
            
          </form>
          <form action="validacion\validarRegistroUsuario.php" method="post" class="sign-up-form">
            <h2 class="title">Registrarse</h2>
            <div class="input-field">
              <i class="fa-solid fa-id-card"></i>
              <input type="int" id="Idusuario" name="Idusuario" placeholder="Numero Identificacion" minlength="10" maxlength="10" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="Nombre" name="Nombre" placeholder="Nombre y Apellido" minlength="1" maxlength="100" required />
            </div>
                      <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="Correo" name="Correo"placeholder="Correo electronico"minlength="3" maxlength="100" required />
            </div>
            <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="tel" name="Telefono" id="Telefono" placeholder="Telefono" maxlength="10" minlength="10" required />
              </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="Contrasena"name="Contrasena" placeholder="Contraseña" maxlength="50" pattern="^(?=.*[a-zA-Z])(?=.*\d).+$" minlength="5" required />
            </div>

            <div class="input-field">
              <i class="fa-solid fa-masks-theater"></i>
              <label for="Rol" id="roles">Rol</label></div>
              <div class="input-radio">
                <label for="Docente">Docente</label>
  <input type="radio" id="Docente" name="Rol" value="Docente">
  
  <label for="Estudiante">Estudiante</label>
  <input type="radio" id="Estudiante" name="Rol" value="Estudiante">

  <label for="padre">Padre de Familia</label>
  <input type="radio" id="padre" name="Rol" value="padre">

  <label for="Coordinador">Coordinador</label>
  <input type="radio" id="Coordinador" name="Rol" value="Coordinador">
            </div>

              <div>
                <input type="checkbox"/><a href="#" class="href"> <span class="rules-text">"Acepto los términos de servicio"</a></span> 
              </div>

            <input type="submit" class="btn" value="Registro completo"/>
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>No tienes una cuenta?</h3>
            <p>
              Después de registrarse, puede aprovechar de los servicios de la institucion educativa.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registro
            </button>
          </div>
          
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Tiene usted una cuenta?</h3>
            <p>
              Debe iniciar sesión para conocer mas de nosotros..
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Ingresar
            </button>
          </div>
         
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>