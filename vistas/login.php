<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>JOYERIA JULY</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <link href="../public/css/app.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../public/img/logo/favicon.ico" />
</head>

<body>
  <div class="app">
    <div class="container-fluid p-0 h-100">
      <div class="row no-gutters h-100 full-height">
        <div class="text-center col-lg-4 d-none d-lg-flex bg p-4" style="background-image: url('../public/images/fondoPantalla.jpg')">
          <div class="
                d-flex
                h-100
                p-h-40 p-v-15
                flex-column
                justify-content-between
              ">
            <div>
              <img src="../images/logobbraun.png" alt="" style="width: 200px" />
            </div>

            <div>
              <h1 class="text-center text-white font-weight-normal">
                JOYERIA JULY
              </h1>
              <!-- <h1 class="text-center text-white m-b-20 font-weight-normal">
                  Socios de la PNP
                </h1> -->
              <h2 class="text-center text-white font-size-16 m-b-20 ">
                Los anillos de compromiso se acompañan con diamantes representando la dureza de la relación y lo eterno de la promesa.
              </h2>
            </div>
            <div class="d-flex justify-content-between">
              <span class="text-white">Chavito Software</span>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="text-white text-link" href="">Legal</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-white text-link" href="">Privado</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8 bg-white" style="
              background-size: 100%;
              background-image: url('../public/img/fondos/fondoblanco.jpg');
            ">
          <div class="container h-100">
            <div class="row no-gutters h-100 align-items-center">
              <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                <div>
                  <img src="../public/images/logobbraun.png" alt="" style="width: 200px" />
                </div>
                <h2>Iniciar Sesion</h2>
                <p class="m-b-30">
                  Ingrese su credencial para obtener acceso
                </p>
                <form method="post" id="frmAcceso">
                  <div class="form-group">
                    <label class="font-weight-semibold" for="userName">Usuario:</label>
                    <div class="input-affix">
                      <i class="prefix-icon anticon anticon-user"></i>
                      <input type="text" class="form-control" id="logina" name="logina" placeholder="Usuario" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="font-weight-semibold" for="password">Contrase&ntilde;a</label>
                    <a class="float-right font-size-13 text-muted" href="recuperar.php">Has olvidado tu contrase&ntilde;a</a>

                    <div class="input-affix m-b-10">
                      <i class="prefix-icon anticon anticon-lock"></i>
                      <input type="password" class="form-control" id="clavea" name="clavea" placeholder="Password" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-flex align-items-center justify-content-between">
                      <!-- <span class="font-size-13 text-muted">
                        No tienes una cuenta? 
                        <a class="small" href=""> Inscribirse</a>
                    </span> -->
                      <button type="submit" class="btn btn-primary">
                        Iniciar
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <!-- <script src="../public/js/jquery-3.1.1.min.js"></script> -->
  <!-- Bootstrap 3.3.5 -->
  <!-- <script src="../public/js/bootstrap.min.js"></script> -->
  <!-- Bootbox -->
  <script src="../public/js/vendors.min.js"></script>
  <script src="../public/js/app.min.js"></script>
  <script type="text/javascript" src="scripts/login.js"></script>
  <!-- jQuery -->
  <script src="../public/js/jquery-3.1.1.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../public/js/bootstrap.min.js"></script>
  <!-- Bootbox -->
  <script src="../public/js/bootbox.min.js"></script>

  <script type="text/javascript" src="scripts/login.js"></script>
</body>

</html>