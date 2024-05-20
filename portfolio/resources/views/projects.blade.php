@extends('layout')

@section('content')

    <h2 id="title-section" class="text-center m-0 p-3 ">Réalisations</h2>

		<section id="projets" class="p-5">
			<div class="row w-100 justify-content-around">

                <article class="card col-12 col-xl-5 mt-2 mb-5 border border-0 shadow-lg p-0">
                    <img src="images/preview-netprime" class="card-img-top img-fluid d-none d-sm-none d-md-block" alt="Preview projet blog">
                    <aside class="card-body">
                        <h5 class="card-title d-flex justify-content-between">Blog <i class="bi bi-filetype-php fs-3"></i></h5>
                        <p class="card-text mb-2">Site de VOD avec base de données</p>
                        <a href="projets/netprime/public" target="_blank" class="btn btn-primary">Voir le site</a>
                        <a href="" target="_blank" class="btn btn-primary">Voir le repo sur Github</a>
                    </aside>
                </article>

                <article class="card col-12 col-xl-5 mt-2 mb-5 border border-0 shadow-lg p-0">
                    <img src="images/preview-oblog.PNG" class="card-img-top img-fluid d-none d-sm-none d-md-block" alt="Preview projet blog">
                    <aside class="card-body">
                        <h5 class="card-title d-flex justify-content-between">Blog <i class="bi bi-filetype-php fs-3"></i></h5>
                        <p class="card-text mb-2">Un blog dynamisé grâce à Php</p>
                        <a href="projets/oBlog/index.php" target="_blank" class="btn btn-primary">Voir le site</a>
                        <a href="https://github.com/Julien-Dussaut/oBlog" target="_blank" class="btn btn-primary">Voir le repo sur Github</a>
                    </aside>
                </article>

                <article class="card col-12 col-xl-5 mt-2 mb-5 border border-0 shadow-lg p-0">
                    <img src="images/preview-hero-corp.PNG" class="card-img-top img-fluid d-none d-sm-none d-md-block" alt="Preview du projet Hero Corp">
                    <aside class="card-body">
                        <h5 class="card-title d-flex justify-content-between">Hero Corp<span><i class="bi bi-filetype-html fs-3"></i>&nbsp;<i class="bi bi-filetype-css fs-3"></i></span></h5>
                        <p class="card-text mb-2">Intégration d'une maquette avec Html et Css</p>
                        <a href="projets/Hero-Corp/html/index.html" target="_blank" class="btn btn-primary">Voir le site</a>
                        <a href="https://github.com/Julien-Dussaut/Projet-Hero-Corp" target="_blank" class="btn btn-primary">Voir le repo sur Github</a>
                    </aside>
                </article>

            </div>
		</section>
@endsection
