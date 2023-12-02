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

	<body class="body-home">
		
		<div class="black-fill"><br /> <br />
			<div class="container">
				<nav class="navbar navbar-expand-lg bg-light" id="homeNav">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">
							<img src="logo.png" width="40">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Inicio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about">Nosotros</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact">Contáctanos</a>
								</li>
							</ul>
							<ul class="navbar-nav me-right mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" href="login.php">Acceder</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<section class="welcome-text d-flex justify-content-center align-items-center flex-column">
					<img src="logo.png">
					<h4>Bienvenid@ a tu <?= $setting['school_name'] ?></h4>
					<a style="color:white; text-decoration:none;" href="https://www.configuroweb.com/">
						<p><?= $setting['slogan'] ?></p>
					</a>
				</section>
				<section id="about" class="d-flex justify-content-center align-items-center flex-column">
					<div class="card mb-3 card-1">
						<div class="row g-0">
							<div class="col-md-4">
								<img src="logo.png" class="img-fluid rounded-start">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title">Nosotros</h5>
									<p class="card-text"><?= $setting['about'] ?></p>
									<p class="card-text"><small class="text-muted">ConfiguroWeb</small></p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id="contact" class="d-flex justify-content-center align-items-center flex-column">
					<form method="post" action="req/contact.php">
						<h3>Contáctanos</h3>
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
							<label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
							<div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más</div>
						</div>
						<div class="mb-3">
							<label class="form-label">Nombre Completo</label>
							<input type="text" name="full_name" class="form-control">
						</div>
						<div class="mb-3">
							<label class="form-label">Mensaje</label>
							<textarea class="form-control" name="message" rows="4"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</section>
				<div class="text-center text-light">
					<a style="color:white; text-decoration:none;" href="https://www.configuroweb.com/">Para más desarrollos ConfiguroWeb</a> <?php print(date('Y-m-d')); ?>
				</div>

			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	</body>

	</html>
<?php } else {
	header("Location: login.php");
	exit;
}  ?>