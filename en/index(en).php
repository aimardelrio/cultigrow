<?php
include "../utils/functions.php";
session_start();

if (isset($_POST['user'])) {

  $user = $_POST['user'];
  $pass = $_POST['password'];
  $error = "";

  $result = queryMysql("SELECT * FROM members WHERE user='$user' AND password='$pass'");
  if ($result->num_rows>0) {
    
    echo"Conexion establecida";
    header("Location: intranet(en).php");
  }


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CULTIGROW</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Roboto:wght@100&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&family=Martian+Mono&family=Roboto:wght@100&display=swap"
    rel="stylesheet">
  <link rel="icon" href="./assets/img/icon.png" type="image">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link misma logocultigrow" href="#index"><img src="./assets/img/icon.png"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link misma" href="#Tienda">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link misma" href="#contacto">Contact information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link misma" href="#sesion">Registration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link misma" href="#somos">Who are we?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link misma" href="#trabaja">Work with us</a>
            </li>

          </ul>
        </div>
        <a class="" href="../index.php">Translate to Spanish</a>
      </div>
    </nav>

  </header>
  <div class="blanco"></div>

  <div id="index" class="pagina">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4">CULTIGROW</h1>
            <h2>Cultivating futures</h2>
            <hr class="my-4">
            <p>Connecting Technology and Nature, Together in a Unique Botanical Experience.</p>
 
            <img>
            <div id="carouselWithIndicators" class="carousel slide" data-bs-ride="carousel">
              <ul class="lista-carousel carousel-indicators">
                <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="2"></li>
              </ul>
              <div class="carousel-inner flex-container">
                <div class="carousel-item active">
                  <img src="./assets/img/cultivo1 (Mediana).jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/cultivo2 (Mediana).jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                  <img src="./assets/img/cultivo3 (Mediana).jpeg" class="d-block w-100" alt="Slide 3">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselWithIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselWithIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
            <div class="fondo mx-auto"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div id="Tienda" class="pagina">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center">

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="./assets/img/plantasinterior.jpg" class="card-img-top" alt="COCHES">
            <div class="card-body">
              <h5 class="card-title">Indoor plants</h5>
              <p class="card-text">Currently in our catalogue you can find the following indoor plants
              </p>
              <a href="#" class="btn btn-primary" id="verCoches">Ver</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="./assets/img/plantasexterior.png" class="card-img-top" alt="MOTOS">
            <div class="card-body">
              <h5 class="card-title">Outdoor plants</h5>
              <p class="card-text">In our catalogue you can currently find the following outdoor plants
              </p>
              <a href="#" class="btn btn-primary" id="verMotos">Ver</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="./assets/img/semillas.png" class="card-img-top" alt="CHOFER">
            <div class="card-body">
              <h5 class="card-title">Seeds</h5>
              <p class="card-text">Currently in our catalogue you can find the following seeds</p>
              <a href="#" class="btn btn-primary" id="verPersonal">Ver</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row vehiculos-section" id="coches-section">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Cactus</h2>
          <p><img src="./assets/img/captus.jpg" alt="" class="img-fluid"></p>
          <h3>10€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Carnivora</h2>
          <P><img src="./assets/img/plantas-carnivoras.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Orchid</h2>
          <p><img src="./assets/img/orquidea.jpg" alt="" class="img-fluid"></p>
          <h3>10€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Elephant plant</h2>
          <p><img src="./assets/img/plantaelefante.jpg" alt="" class="img-fluid"></p>
          <h3>20€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Croton</h2>
          <P><img src="./assets/img/croton.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Poto</h2>
          <p><img src="./assets/img/poto.jpg" alt="" class="img-fluid"></p>
          <h3>10€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Anturio</h2>
          <p><img src="./assets/img/anturio.jpg" alt="" class="img-fluid"></p>
          <h3>25€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Tillandsia</h2>
          <P><img src="./assets/img/tillandsia.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Monstera</h2>
          <p><img src="./assets/img/mosnterra.jpeg" alt="" class="img-fluid"></p>
          <h3>15€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Violet</h2>
          <p><img src="./assets/img/violeta.jpg" alt="" class="img-fluid"></p>
          <h3>20€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Spathiphyllum</h2>
          <P><img src="./assets/img/espantifilo.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Chamadeora elegans</h2>
          <p><img src="./assets/img/chamadeoraelegans.jpg" alt="" class="img-fluid"></p>
          <h3>30€</h3>
        </div>
      </div>
      <div class="row vehiculos-section" id="motos-section">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Rose</h2>
          <p><img src="./assets/img/rosa.jpg" alt="" class="img-fluid"></p>
          <h3>20€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Conifer</h2>
          <P><img src="./assets/img/coníferas.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Chestnut</h2>
          <p><img src="./assets/img/castaño.jpg" alt="" class="img-fluid"></p>
          <h3>40€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Apricot</h2>
          <p><img src="./assets/img/albaricoquero.jpg" alt="" class="img-fluid"></p>
          <h3>50€/dia</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Cherry</h2>
          <P><img src="./assets/img/cerezo.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Olive tree</h2>
          <p><img src="./assets/img/olivo.jpg" alt="" class="img-fluid"></p>
          <h3>200€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Hebe</h2>
          <p><img src="./assets/img/hebe.jpg" alt="" class="img-fluid"></p>
          <h3>50€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Peony</h2>
          <P><img src="./assets/img/peonia.jpg" alt="" class="img-fluid"></P>
          <h3>12€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Nandina</h2>
          <p><img src="./assets/img/nandina.jpg" alt="" class="img-fluid"></p>
          <h3>20€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Abelia</h2>
          <p><img src="./assets/img/abelia.jpg" alt="" class="img-fluid"></p>
          <h3>30€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Trachycarpus</h2>
          <P><img src="./assets/img/Trachycarpus.jpg" alt="" class="img-fluid"></P>
          <h3>115€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Phormium</h2>
          <p><img src="./assets/img/Phormium.png" alt="" class="img-fluid"></p>
          <h3>120€</h3>
        </div>
      </div>
      <div class="row vehiculos-section" id="personal-section">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Cactus</h2>
          <p><img src="./assets/img/captus.jpg" alt="" class="img-fluid"></p>
          <h3>10€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Carnivora</h2>
          <P><img src="./assets/img/plantas-carnivoras.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Orchid</h2>
          <p><img src="./assets/img/orquidea.jpg" alt="" class="img-fluid"></p>
          <h3>10€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Elephant plant</h2>
          <p><img src="./assets/img/plantaelefante.jpg" alt="" class="img-fluid"></p>
          <h3>20€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Croton</h2>
          <P><img src="./assets/img/croton.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Poto</h2>
          <p><img src="./assets/img/poto.jpg" alt="" class="img-fluid"></p>
          <h3>10€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Anturio</h2>
          <p><img src="./assets/img/anturio.jpg" alt="" class="img-fluid"></p>
          <h3>25€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Tillandsia</h2>
          <P><img src="./assets/img/tillandsia.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Monstera</h2>
          <p><img src="./assets/img/mosnterra.jpeg" alt="" class="img-fluid"></p>
          <h3>15€</h3>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Violet</h2>
          <p><img src="./assets/img/violeta.jpg" alt="" class="img-fluid"></p>
          <h3>20€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Spathiphyllum</h2>
          <P><img src="./assets/img/espantifilo.jpg" alt="" class="img-fluid"></P>
          <h3>15€</h3>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h2>Chamadeora elegans</h2>
          <p><img src="./assets/img/chamadeoraelegans.jpg" alt="" class="img-fluid"></p>
          <h3>30€</h3>
        </div>
      </div>

 
    </div>
  </div>
  </div>

  <div id="contacto" class="pagina">
    <div class="container">
      <div class="row">
        <h1 class="d-flex justify-content-center">CONTACT</h1>
        <H4 class="d-flex justify-content-center">WE SOLVE YOUR DOUBTS</H4>
        <div class="form-group">
          <label for="exampleFormControlInput1">E-mail address</label>
          <input type="email" class="form-control" id="Correo" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Reason</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Plant information</option>
            <option>Treatment of diseases</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description of the doubt/problem</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Attach additional file</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        </form>
      </div>
    </div>
  </div>

  <div id="sesion" class="pagina">
    <div id="inicio" class="">
    <?php
/**
 * @title: Proyecto integrador Ev01 - Acceso al sistema.
 * @description:  Script PHP para acceder al sistema
 *
 * @version    0.1
 *
 * @author ander_frago@cuatrovientos.org
 */

$error = $user = $pass = "";
// Al pulsar el boton del formulario se recarga la misma página, volviendo a ejecutar este script.
// En caso de que se haya  completado los valores del formulario se verifica la existencia de usuarios en la base de datos
// para los valores introducidos.
if (isset($_POST['user']))
{
  $user = $_POST['user'];
  $pass = $_POST['password'];
  
  if ($user == "" || $pass == "")
      $error = "Debes completar todos los campos<br>";
  else
  {
      // TODO Esta la consulta de base de datos correspondiente para verificar si el usuario existe
      $result = queryMySQL("SELECT * FROM members WHERE user='$user'");


    if ($result->num_rows == 0)
    {
      $error = "invalid username or password";
    }
    else
    {
      // TODO Realiza la gestión de la sesión de usuario:
      // Almacena en la variables de sesión user el valore de $user
      $_SESSION['user'] = $user;

      // Control de vida de la sesión antes de que expire
      if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
      } else if (time() - $_SESSION['CREATED'] > 1800) {
        // session started more than 30 minutes ago
        session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
        $_SESSION['CREATED'] = time();  // update creation time
      }
    
        
      // En caso de un registro  exitoso 
      // La gestión de usuario en la página principal se hace a través de la variable de sesión
     //header('Location: intranet(en).php');
    }
  }
}
// En caso de que no se haya completado el formulario,
// analizamos si hay variable de sesión almacenada.
else if (isset($_SESSION['user'])){
    // En caso de que exista variable de sesión redireccionamos a la página principal
     //header('Location: ./index.php#sesion'); 
}
?>
<div class="container">
  <form class="form-horizontal" role="form" method="POST" action="./index(en).php">
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                  <h2>Enter access details</h2>
                  <hr>
              </div>
          </div>
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                  <div class="form-group has-danger">
                      <label class="sr-only" for="email">user:</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                          <div class="input-group-addon" style="width: 2.6rem"></div>
                          <!--
                         TODO Corrige el BUG
                          -->
                          <input type="text" name="user" class="form-control" id="email"
                                 placeholder="User" required autofocus>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-control-feedback">
                      <span class="text-danger align-middle">
                          <i class="fa fa-close"></i> <?php  
                          //$errorEmail = ($user == "" || $pass == "") ? "<span class='error'>Debes completar todos los campos</span><br>" : "";
                          //$errorPass = ($result->num_rows == 0) ? "<span class='error'>Email/Contraseña inválida</span><br><br>" : "";
                           ?>
                      </span>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class="sr-only" for="pass">Password:</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                          <div class="input-group-addon" style="width: 2.6rem"></div>
                          <input type="password" name="password" class="form-control" id="password"
                                 placeholder="password" required>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-control-feedback">
                      <span class="text-danger align-middle">
                     <?php // TODO Muestra el mensaje de error ?>
                      </span>
                  </div>
              </div>
          </div>
          <div class="row" style="padding-top: 1rem">
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Log in</button>
                <?php
                if(isset($_POST['user'])){
                  if($error !== ""){
                    echo"$error";
                  }
                }
                ?>
                

              </div>
          </div>
      </form>
  </div>

      </div>
    </div>

    <div id="registro" class="">
      <div class="container">
        <div class="row">
          <h1 class="d-flex justify-content-center">Register</h1>
          <form>
            <div class="mb-3">
              <label for="examplename" class="form-label">User</label>
              <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">E-mail address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We will never share your email address with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="examplename" class="form-label">Name and Surname</label>
              <input type="name" class="form-control" id="name" aria-describedby="nameHelp">
            </div>
            <button type="submit" class="btn btn-primary">REGISTER</button>
          </form>
          <button id="registro2Btn">I already have an account</button>
        </div>
      </div>
    </div>
  </div>


  <div id="somos" class="pagina">
    <div class="container">
      <div class="row">
        <h1 class="d-flex justify-content-center">WHO ARE WE?</h1>
        <H4 class="d-flex justify-content-center">What do we do?</H4>
        <br>
        <hr>
        <br>
        <p>
          At CultiGrow, we are dedicated to the fusion of technology and passion for plants. We are a community
          committed to creating a unique botanical
          unique botanical care experience through our innovative, artificial intelligence-backed application.
          Our goal is to simplify and enrich the connection between people and plants.
          the connection between people and plants by providing detailed analysis, personalised advice and a platform that
          and a platform that transforms the care of your plants
          your plant care into an exciting and educational experience. At CultiGrow, we cultivate a space where
          technology meets nature to offer a unique and accessible
          a unique and accessible approach for all those who share our love for the botanical world.
        </p>
        <br>
        <br>
        
        <h5>MISSION, VISION AND VALUES:</h5>

        <ul class="list-group">
          <li class="list-group-item">
            <div class="card bg-light">
              <div class="card-body">
                <h5 class="card-title">Mission:</h5>
                <p class="card-text">AI application that helps young people to start their own vegetable garden.</p>
              </div>
            </div>
          </li>
          <li class="list-group-item">
            <div class="card bg-light">
              <div class="card-body">
                <h5 class="card-title">Vision:</h5>
                <p class="card-text">Revitalise agriculture, partnering with industry leaders and providing personalised attention to users.
                  personalised attention to users.</p>
              </div>

          </li>
          <li class="list-group-item">
            <div class="card bg-light">
              <div class="card-body">
                <h5 class="card-title">Values:</h5>
                <p class="card-text">Optimism, environmental sustainability and social responsibility.</p>
              </div>
            </div>
            <br>
            <h5 class="d-flex justify-content-center">¿WHERE ARE WE LOCATED?</h5>
          </li>
          <di class="d-flex justify-content-center">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1607.1479026630304!2d-1.6589271597937256!3d42.82392294699684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5092855cefdac7%3A0xab7c62765f5209e2!2sCuatrovientos%20Centro%20Integrado!5e0!3m2!1ses!2ses!4v1703156280257!5m2!1ses!2ses"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><br>
        </ul>
      </div>
    </div>
    
  </div>
  <div id="trabaja" class="pagina">
    <div class="container">
      <div class="row">
        <h1 class="d-flex justify-content-center">WORK WITH US</h1>
        <H4 class="d-flex justify-content-center">SEND US YOUR CV</H4>
        <form>
          <div class="mb-3">
            <label for="examplename" class="form-label">Name</label>
            <input type="name" class="form-control" id="name1" aria-describedby="nameHelp">
          </div>
          <div class="mb-3">
            <label for="examplename" class="form-label">First surname</label>
            <input type="name" class="form-control" id="surnamename" aria-describedby="nameHelp">
          </div>
          <div class="mb-3">
            <label for="examplename" class="form-label">Second surname</label>
            <input type="name" class="form-control" id="surnamename2" aria-describedby="nameHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We will never share your email address with anyone else.</div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Where would you like to work?</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Customer service</option>
              <option>RRHH</option>
              <option>System Administrator</option>
              <option>Buying and Selling</option>
              <option>Marketing</option>
              <option>Other</option>
            </select>
          </div>
          <br>
        </form>
        <div class="form-group">
          <label for="exampleFormControlFile1">Attach additional file</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">SEND</button>
      </div>
    </div>
  </div>



  <!-- Footer 3 - Bootstrap Brain Component -->
  <footer class="footer">



    <!-- Copyright - Bootstrap Brain Component -->
    <div class="bg-light py-4 py-md-5 py-xl-8 border-top border-light-subtle">
      <div class="container overflow-hidden">
        <div class="row gy-4 gy-md-0">
          <div class="col-xs-12 col-sm-6 col-md-4 order-0 order-md-0">
            <div class="footer-logo-wrapper text-center text-sm-start">
              <a href="#!">

              </a>
            </div>
          </div>

          <div class="col-xs-12 col-md-4 order-2 order-md-1">
            <div class="footer-copyright-wrapper text-center">
              &copy; CULTIGROW
            </div>

            <div class="credits text-secondary text-center mt-2 fs-7">
              Aimar, Asier, Aitor, Raúl
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 order-1 order-md-2">
            <ul class="nav justify-content-center justify-content-sm-end">
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-youtube" viewBox="0 0 16 16">
                    <path
                      d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-twitter" viewBox="0 0 16 16">
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-dark" href="#!">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
  <script src="./assets/JQuery/Jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>