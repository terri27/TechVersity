<?php
include "DB_connection.php";
include "data/setting.php";
$setting = getSetting($conn);

if ($setting != 0) {

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>ECOURSES - Universidad en línea</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
      <div class="row align-items-center py-4 px-xl-5">
        <div class="col-lg-3">
          <a href="" class="text-decoration-none d-flex align-items-center">
            <img width="70px" src="./img/Diseño sin título.png" alt="" />
            <h1 class="m-0"><span class="text-primary">TECH</span>VERSITY</h1>
          </a>
        </div>
        <div class="col-lg-3 text-right">
          <div class="d-inline-flex align-items-center">
            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
            <div class="text-left">
              <h6 class="font-weight-semi-bold mb-1">Nuestra Dirección</h6>
              <small>Panamá City, Panamá</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-right">
          <div class="d-inline-flex align-items-center">
            <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
            <div class="text-left">
              <h6 class="font-weight-semi-bold mb-1">Email</h6>
              <small>info@techversity.com</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 text-right">
          <div class="d-inline-flex align-items-center">
            <i class="fa fa-2x fa-phone text-primary mr-3"></i>
            <div class="text-left">
              <h6 class="font-weight-semi-bold mb-1">LLámanos</h6>
              <small>+255 2438</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid">
      <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
          <a
            class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 67px; padding: 0 30px"
          >
            <h5 class="text-primary m-0">
              <i class="fa fa-book-open mr-2"></i>Carreras
            </h5>
            <i class="fa fa-angle-down text-primary"></i>
          </a>
          <nav
            class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
            id="navbar-vertical"
            style="width: calc(100% - 30px); z-index: 9"
          >
            <div class="navbar-nav w-100">
              <div class="nav-item dropdown">
                <a href="#" class="nav-link" data-toggle="dropdown"
                  >Diseño web<i class="fa fa-angle-down float-right mt-1"></i
                ></a>
                <div
                  class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0"
                >
                  <a href="" class="dropdown-item">JS</a>
                  <a href="" class="dropdown-item">PHP</a>
                  <a href="" class="dropdown-item">Python</a>
                </div>
              </div>
              <a href="" class="nav-item nav-link"
                >Lic. Ingeniería en informática</a
              >
              <a href="" class="nav-item nav-link">Lic. Ciencia de datos</a>
              <a href="" class="nav-item nav-link">Lic. Comercio Electrónico</a>
              <a href="" class="nav-item nav-link">Lic. Ciberseguridad</a>
            </div>
          </nav>
        </div>
        <div class="col-lg-9">
          <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav py-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Acerca</a>
                <a href="course.html" class="nav-item nav-link">Cursos</a>
                <a href="teacher.html" class="nav-item nav-link">Profesores</a>
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Blog</a
                  >
                  <div class="dropdown-menu rounded-0 m-0">
                    <a href="blog.html" class="dropdown-item">Blog List</a>
                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                  </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contacto</a>
              </div>
              <a
                class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"
                href="login.php"
                >Iniciar Sesion</a
              >
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5">
      <div
        id="header-carousel"
        class="carousel slide carousel-fade"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#header-carousel"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#header-carousel" data-slide-to="1"></li>
          <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="min-height: 300px">
            <img
              class="position-relative w-100"
              src="img/carousel-1.jpg"
              style="min-height: 300px; object-fit: cover"
            />
            <div
              class="carousel-caption d-flex align-items-center justify-content-center"
            >
              <div class="p-5" style="width: 100%; max-width: 900px">
                <h5 class="text-white text-uppercase mb-md-3">
                  Los mejores cursos en línea
                </h5>
                <h1 class="display-3 text-white mb-md-4">
                  La mejor educación desde tu hogar
                </h1>
                <a
                  href=""
                  class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"
                  >Leé más</a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item" style="min-height: 300px">
            <img
              class="position-relative w-100"
              src="img/carousel-2.jpg"
              style="min-height: 300px; object-fit: cover"
            />
            <div
              class="carousel-caption d-flex align-items-center justify-content-center"
            >
              <div class="p-5" style="width: 100%; max-width: 900px">
                <h5 class="text-white text-uppercase mb-md-3">
                  LOS MEJORES CURSOS EN LÍNEA
                </h5>
                <h1 class="display-3 text-white mb-md-4">
                  La mejor plataforma de aprendizaje en línea
                </h1>
                <a
                  href=""
                  class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"
                  >Leé más</a
                >
              </div>
            </div>
          </div>
          <div class="carousel-item" style="min-height: 300px">
            <img
              class="position-relative w-100"
              src="img/carousel-3.jpg"
              style="min-height: 300px; object-fit: cover"
            />
            <div
              class="carousel-caption d-flex align-items-center justify-content-center"
            >
              <div class="p-5" style="width: 100%; max-width: 900px">
                <h5 class="text-white text-uppercase mb-md-3">
                  LOS MEJORES CURSOS EN LÍNEA
                </h5>
                <h1 class="display-3 text-white mb-md-4">
                  Nueva forma de aprender desde casa
                </h1>
                <a
                  href=""
                  class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"
                  >Leé más</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <img
              class="img-fluid rounded mb-4 mb-lg-0"
              src="img/about.jpg"
              alt=""
            />
          </div>
          <div class="col-lg-7">
            <div class="text-left mb-4">
              <h5
                class="text-primary text-uppercase mb-3"
                style="letter-spacing: 5px"
              >
                Acerca de nosótros
              </h5>
              <h1>Manera innovadora de aprender</h1>
            </div>
            <p>
              Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita,
              ipsum dolores amet voluptua duo dolores et sit ipsum rebum,
              sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus
              gubergren sit rebum clita amet, sea est sea vero sed et.
              Sadipscing labore tempor at sit dolor clita consetetur diam. Diam
              ut diam tempor no et, lorem dolore invidunt no nonumy stet ea
              labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit
              tempor ut nonumy elitr dolores justo aliquyam ipsum stet
            </p>
            <a
              href=""
              class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2"
              >Aprende más</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Category Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            Carreras
          </h5>
          <h1>Explora las principales carreras</h1>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-1.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Diseño web</h4>
                <span>6 Semestres</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-2.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium text-center">
                  Ingeniería informática
                </h4>
                <span>10 Semestres</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-3.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Ciencia de Datos</h4>
                <span>8 Semestres</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-4.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium text-center">
                  Diseño de aplicaciones
                </h4>
                <span>100 Semestres</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-5.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Marketing</h4>
                <span>8 Semestres</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-6.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium text-center">
                  Comercio Electrónico
                </h4>
                <span>8 Semestres</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-7.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Ciberseguridad</h4>
                <span>8 Semestres</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div
              class="cat-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/cat-8.jpg" alt="" />
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Cloud Computing</h4>
                <span>10 Semestres</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Category Start -->

    <!-- Courses Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            Cursos
          </h5>
          <h1>Nuestros cursos populares</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/course-1.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href=""
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$25</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/course-2.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href=""
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$25</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/course-3.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href=""
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$25</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/course-4.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href=""
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$25</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/course-5.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href=""
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$25</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2">
              <img class="img-fluid" src="img/course-6.jpg" alt="" />
              <div class="bg-secondary p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-users text-primary mr-2"></i>25
                    Students</small
                  >
                  <small class="m-0"
                    ><i class="far fa-clock text-primary mr-2"></i>01h
                    30m</small
                  >
                </div>
                <a class="h5" href=""
                  >Web design & development courses for beginner</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">$25</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Courses End -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-5 mb-lg-0">
            <div class="mb-4">
              <h5
                class="text-primary text-uppercase mb-3"
                style="letter-spacing: 5px"
              >
              NECESITas ALGÚN CURSO
              </h5>
              <h1 class="text-white">30% de descuento para nuevos estudiantes</h1>
            </div>
            <p class="text-white">
              Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
              dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
              Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
              dolor
            </p>
            <ul class="list-inline text-white m-0">
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>Labore eos amet
                dolor amet diam
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor
                amet ipsum
              </li>
              <li class="py-2">
                <i class="fa fa-check text-primary mr-3"></i>Diam dolor diam
                elitripsum vero.
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
            <div class="card border-0">
            <div class=" container bg-dark">
				<section style="margin: 20px;" id="contact" class="d-flex justify-content-center align-items-center flex-column">
					<form method="post" action="req/contact.php">
						<h3 class="text-white">Contáctanos</h3>
						<?php if (isset($_GET['error'])) { ?>
							<div class="alert alert-danger" role="alert">
								<?= $_GET['error'] ?>
							</div>
						<?php } ?>
						<?php if (isset($_GET['success'])) { ?>
							<div class="alert alert-success" role="alert">
								<?= $_GET['success'] ?>
							</div>
						<?php } ?>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label text-white">Correo Electrónico</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text text-white">Nunca compartiremos su correo electrónico con nadie más</div>
						</div>
						<div class="mb-3">
							<label class="form-label text-white">Nombre Completo</label>
							<input type="text" name="full_name" class="form-control">
						</div>
						<div class="mb-3">
							<label class="form-label text-white">Mensaje</label>
							<textarea class="form-control" name="message" rows="4"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</section>

			</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Registration End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            Profesores
          </h5>
          <h1>Conoce a nuestros profesores</h1>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-1.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Ingeniera</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-2.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Ingeniero</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-3.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Ingeniera</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-4">
            <div class="team-item rounded overflow-hidden mb-2">
              <div class="team-img position-relative">
                <img class="img-fluid" src="img/team-4.jpg" alt="" />
                <div class="team-social">
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-outline-light btn-square mx-1" href="#"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
              <div class="bg-secondary p-4">
                <h5>Jhon Doe</h5>
                <p class="m-0">Ingeniero</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            Testimonios
          </h5>
          <h1>Lo que dicen nuestros estudiantes</h1>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="owl-carousel testimonial-carousel">
              <div class="text-center">
                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                <h4 class="font-weight-normal mb-4">
                  Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                  elitr dolore et eos labore, stet justo sed est sed. Diam sed
                  sed dolor stet amet eirmod eos labore diam
                </h4>
                <img
                  class="img-fluid mx-auto mb-3"
                  src="img/testimonial-1.jpg"
                  alt=""
                />
                <h5 class="m-0">Estudent engineer</h5>
                <span>Profession</span>
              </div>
              <div class="text-center">
                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                <h4 class="font-weight-normal mb-4">
                  Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                  elitr dolore et eos labore, stet justo sed est sed. Diam sed
                  sed dolor stet amet eirmod eos labore diam
                </h4>
                <img
                  class="img-fluid mx-auto mb-3"
                  src="img/testimonial-2.jpg"
                  alt=""
                />
                <h5 class="m-0">Estudent engineer</h5>
                <span>Profession</span>
              </div>
              <div class="text-center">
                <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                <h4 class="font-weight-normal mb-4">
                  Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum
                  elitr dolore et eos labore, stet justo sed est sed. Diam sed
                  sed dolor stet amet eirmod eos labore diam
                </h4>
                <img
                  class="img-fluid mx-auto mb-3"
                  src="img/testimonial-3.jpg"
                  alt=""
                />
                <h5 class="m-0">Estudent engineer</h5>
                <span>Profession</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
          <h5
            class="text-primary text-uppercase mb-3"
            style="letter-spacing: 5px"
          >
            Nuestro Blog
          </h5>
          <h1>Lo último de nuestro blog</h1>
        </div>
        <div class="row pb-3">
          <div class="col-lg-4 mb-4">
            <div
              class="blog-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/blog-1.jpg" alt="" />
              <a class="blog-overlay text-decoration-none" href="">
                <h5 class="text-white mb-3">
                  Lorem elitr magna stet eirmod labore amet labore clita at ut
                  clita
                </h5>
                <p class="text-primary m-0">Ago 27, 2023</p>
              </a>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div
              class="blog-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/blog-2.jpg" alt="" />
              <a class="blog-overlay text-decoration-none" href="">
                <h5 class="text-white mb-3">
                  Lorem elitr magna stet eirmod labore amet labore clita at ut
                  clita
                </h5>
                <p class="text-primary m-0">Ago 27, 2023</p>
              </a>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div
              class="blog-item position-relative overflow-hidden rounded mb-2"
            >
              <img class="img-fluid" src="img/blog-3.jpg" alt="" />
              <a class="blog-overlay text-decoration-none" href="">
                <h5 class="text-white mb-3">
                  Lorem elitr magna stet eirmod labore amet labore clita at ut
                  clita
                </h5>
                <p class="text-primary m-0">Ago 27, 2023</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5"
      style="margin-top: 90px"
    >
      <div class="row pt-5">
        <div class="col-lg-7 col-md-12">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h5
                class="text-primary text-uppercase mb-4"
                style="letter-spacing: 5px"
              >
                Contáctanos
              </h5>
              <p>
                <i class="fa fa-map-marker-alt mr-2"></i>Panamá City, Panamá
              </p>
              <p><i class="fa fa-phone-alt mr-2"></i>+255 2438</p>
              <p><i class="fa fa-envelope mr-2"></i>info@techversity.com</p>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-square mr-2" href="#"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a class="btn btn-outline-light btn-square" href="#"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <div class="col-md-6 mb-5">
              <h5
                class="text-primary text-uppercase mb-4"
                style="letter-spacing: 5px"
              >
                Nuestros cursos
              </h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Diseño Wev</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Lic. Ingeniera informática</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Marketing</a
                >
                <a class="text-white mb-2" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Ciencia de datos</a
                >
                <a class="text-white" href="#"
                  ><i class="fa fa-angle-right mr-2"></i>Ciberseguridad</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 mb-5">
          <h5
            class="text-primary text-uppercase mb-4"
            style="letter-spacing: 5px"
          >
            Newsletter
          </h5>
          <p>
            Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum
            sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo
            eirmod sea justo no lorem est diam
          </p>
          <div class="w-100">
            <div class="input-group">
              <input
                type="text"
                class="form-control border-light"
                style="padding: 30px"
                placeholder="Tu correo electrónico"
              />
              <div class="input-group-append">
                <button class="btn btn-primary px-4">Regístrate Ahora</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
      style="border-color: rgba(256, 256, 256, 0.1) !important"
    >
      <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0 text-white">
            &copy; <a href="#">techversity</a>. Todos los derechos reservados. Designed by
            <a href="https://htmlcodex.com">TerryDev</a>
          </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
          <ul class="nav d-inline-flex">
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Privacidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Términos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white py-0" href="#">Ayuda</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

<?php } else {
	header("Location: login.php");
	exit;
}  ?>
