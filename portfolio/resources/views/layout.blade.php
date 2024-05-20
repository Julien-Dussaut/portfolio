<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap-5.3.3-dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Julien Dussaut - Développeur web - Accueil</title>
</head>

<body class="container-fluid d-flex row min-vh-100 max-vw-100 p-0 m-0">

    <!-- * ************************************************ NAVBAR ************************************************ -->

    <section id="navbar" class="col-2 px-md-2 px-0 min-vh-100">
        <nav class="d-flex flex-column align-items-center align-items-xl-center pt-2 min-vh-100">
            <h1 class="d-flex pb-2 mb-1 w-100 mb-md-0 me-md-auto text-center">
                <span class="fs-5 d-none d-sm-inline">Julien Dussaut - Développeur<br><span id="subtitle"> PHP / Symfony</span>
                    <!-- <span id="cursor">|</span> -->
                </span></span>
            </h1>
            <ul class="nav nav-pills flex-column mb-xl-auto mb-0 align-items-center align-items-lg-start" id="menu">
                <li class="nav-item w-100 mb-2">
                    <a href="{{ route('home') }}" aria-label="Accueil du site" class="nav-link px-3 align-middle">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-xl-inline">Accueil</span>
                    </a>
                </li>
                <li class="nav-item w-100 mb-2">
                    <a href="{{ route('projects') }}" aria-label="Mes réalisations" class="nav-link px-3 align-middle">
                        <i class="fs-4 bi bi-clipboard2-check"></i> <span class="ms-1 d-none d-xl-inline">Réalisations</span>
                    </a>
                </li>
                <li class="nav-item w-100 mb-2">
                    <a href="{{ route('skills') }}" aria-label="Mes compétences" class="nav-link px-3 align-middle">
                        <i class="fs-4 bi bi-stack"></i> <span class="ms-1 d-none d-xl-inline">Compétences</span></a>
                </li>
                <li class="nav-item w-100 mb-2">
                    <a href="{{ route('cv') }}" aria-label="Mon parcours" class="nav-link px-3 align-middle">
                        <i class="fs-4 bi bi-person-lines-fill"></i> <span class="ms-1 d-none d-xl-inline">Parcours</span></a>
                </li>
                <li class="nav-item w-100 mb-2">
                    <a href="" data-bs-toggle="offcanvas" data-bs-target="#formulaire-call-to-action" aria-label="Affiche le formulaire de contact" aria-controls="formulaire-call-to-action" class="nav-link px-3 align-middle">
                        <i class="fs-4 bi bi-envelope-arrow-up"></i> <span class="ms-1 d-none d-xl-inline">Contactez moi</span> </a>
                </li>
                <img src="{{ asset('images/nav-image.webp') }}" alt="" class="nav-link px-3 align-middle d-lg-block d-sm-none d-none w-75 m-2 mt-5 align-self-center">
            </ul>
        </nav>
    </section>

    <!-- * ************************************************ END NAVBAR ************************************************-->

    <!-- * ************************************************ CONTENT ************************************************ -->

    <main class="col-10 d-flex flex-column min-vh-100 p-0 overflow-y-auto justify-content-between">

        @yield('content')

        <section class="d-flex flex-column">
			<button id="cta" class="btn btn-primary w-50 row p-3 mt-5 mb-5 fs-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#formulaire-call-to-action" aria-controls="formulaire-call-to-action" aria-label="Affiche le formulaire de contact">Contactez moi</button>
		</section>

	</main>

	<!-- * ************************************************ END CONTENT ************************************************ -->

	<!-- * ************************************************ OFFCANVAS ************************************************ -->

	<div class="offcanvas offcanvas-end" tabindex="-1" id="formulaire-call-to-action" aria-labelledby="formulaire-de-contact">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="formulaire-de-contact">Contactez moi</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<form class="col" action="">
				<fieldset>
					<legend></legend>
					<div class="input-group mb-4 focus-ring">
						<label for="nom" class="input-group-text">Nom</label>
						<input id="nom" type="text" class="form-control">
					</div>
					<div class="input-group mb-4">
						<label for="prenom" class="input-group-text">Prénom</label>
						<input id="prenom" type="text" class="form-control">
					</div>
					<div class="input-group mb-4">
						<label for="email" class="input-group-text">Email</label>
						<input id="email" type="text" class="form-control">
					</div>
					<div class="input-group mb-4">
						<textarea class="form-control message" name="message" id="message" cols="30" rows="10"
						placeholder="Votre message..."></textarea>
					</div>
					<button type="submit" class="btn btn-primary w-100">Envoyer</button>
				</fieldset>
			</form>
		</div>
	</div>

	<!-- * ************************************************ END OFFCANVAS ************************************************ -->

	<!-- * ************************************************ END ALL CONTENT ************************************************-->

	<!-- <script src="js/script.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
</body>

</html>
